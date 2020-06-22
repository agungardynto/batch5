@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ $title }}</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <h6 class="mb-3">Total Bagian : {{ $total }}</h6>
                                <thead>
                                    <tr>
                                        <th scope="col" style="border-bottom: 0">NO</th>
                                        <th scope="col" style="border-bottom: 0">NIK</th>
                                        <th scope="col" style="border-bottom: 0">Nama Karyawan</th>
                                        <th scope="col" style="border-bottom: 0">Jenis Kelamin</th>
                                        <th scope="col" style="border-bottom: 0">Bagian</th>
                                        <th scope="col" style="border-bottom: 0">Nomor Telepon</th>
                                        <th scope="col" style="border-bottom: 0">Hobi</th>
                                        <th scope="col" style="border-bottom: 0">Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $karyawan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <a href="{{ route('karyawan.show', $karyawan->id) }}" class="btn btn-sm btn-success my-1">{{ $karyawan->nik }}</a>
                                            <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="post" class="my-1 d-inline-block">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                        <td>{{ $karyawan->nama }}</td>
                                        <td>{{ $karyawan->jenis_kelamin == 'L' ? 'Laki - Laki' : 'Perempuan' }}</td>
                                        <td>{{ $karyawan->bagian_u->nama_bagian }}</td>
                                        <td>{{ $karyawan->telepon->nomor }}</td>
                                        <td>
                                            @foreach ($karyawan->hobi as $item)
                                                <span class="btn btn-primary">{{ $item->hobi }}</span>
                                            @endforeach
                                        </td>
                                        <td>{{ $karyawan->alamat }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Data Tidak Ditemukan!</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection