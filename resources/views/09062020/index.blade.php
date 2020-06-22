@extends('app')
@section('content')
    <div class="container">
        <h3 class="pt-5">Data Penduduk</h3>
        <a href="{{ route('withimage.create') }}" class="btn btn-sm btn-primary mb-2">Tambah Data</a>
        <table class="table table-bordered mt">
            <tr>
                <th scope="col">Nomor Kartu Keluarga</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Status</th>
                <th scope="col">Pendidikan</th>
            </tr>
            @forelse ($data as $datas)
            <tr>
                <td>
                    <a href="{{ route('withimage.show', $datas->id) }}" class="btn btn-sm btn-block btn-success text-left">{{ $datas->no_kk }}</a>
                    <form action="{{ route('withimage.destroy', $datas->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-block btn-danger text-left mt-1">Hapus Data</button>
                    </form>
                </td>
                <td style="vertical-align: middle">{{ $datas->nama }}</td>
                <td style="vertical-align: middle">{{ $datas->jenis_kelamin == 'L' ? 'Laki - Laki' : 'Perempuan' }}</td>
                <td style="vertical-align: middle">{{ $datas->status }}</td>
                <td style="vertical-align: middle">{{ $datas->pendidikan }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5">Data Tidak Ditemukan!</td>
            </tr>
            @endforelse
        </table>
    </div>
@endsection