@extends('app')
@section('content')
    <div class="container">
        <div class="row vh-100 align-items-center">
            <div class="col d-flex justify-content-center">
                <div class="card" style="max-width: 800px">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td rowspan="6" class="d-flex justify-content-center" style="min-width: 300px;">
                                        <img src="{{ Storage::url($data->foto) }}" class="show-foto">
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <th style="min-width: 100px">NO. KK</th>
                                                <td>:</td>
                                                <td style="width: 150px">{{ $data->no_kk }}</td>
                                            </tr>
                                            <tr>
                                                <th>Nama</th>
                                                <td>:</td>
                                                <td>{{ $data->nama }}</td>
                                            </tr>
                                            <tr>
                                                <th>Jenis Kelamin</th>
                                                <td>:</td>
                                                <td>{{ $data->jenis_kelamin == 'L' ? 'Laki - Laki' : 'Perempuan' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th>
                                                <td>:</td>
                                                <td>{{ $data->alamat }}</td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td>:</td>
                                                <td>{{ $data->status }}</td>
                                            </tr>
                                            <tr>
                                                <th>Pendidikan</th>
                                                <td>:</td>
                                                <td>{{ $data->pendidikan }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    <a href="{{ route('withimage.edit', $data->id) }}" class="btn btn-sm btn-success">Perbarui</a>
                                                    <a href="{{ route('withimage.index') }}" class="btn btn-sm btn-danger">Kembali</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection