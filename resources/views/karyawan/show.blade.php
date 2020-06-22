@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-header">{{ $title }} {{ $data->nama }}</div>
                    <div class="card-body">
                        <h5>NIK</h5>
                        <p>{{ $data->nik }}</p>
                        <h5>Nama Karyawan</h5>
                        <p>{{ $data->nama }}</p>
                        <h5>Jenis Kelamin</h5>
                        <p>{{ $data->jenis_kelamin == 'L' ? 'Laki - Laki' : 'Perempuan' }}</p>
                        <h5>Bagian</h5>
                        <p>{{ $data->bagian_u->nama_bagian }}</p>
                        <h5>Nomor Telepon</h5>
                        <p>{{ $data->telepon->nomor }}</p>
                        <h5>Alamat</h5>
                        <p>{{ $data->alamat }}</p>
                        <p>
                            @foreach ($data->hobi as $item)
                                {{ "$item->hobi, " }}
                            @endforeach
                        </p>
                        <a href="{{ route('karyawan.index') }}" class="btn btn-sm btn-danger float-right">Kembali</a>
                        <a href="{{ route('karyawan.edit', $data->id) }}" class="btn btn-sm btn-success float-right mr-1">Perbarui</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection