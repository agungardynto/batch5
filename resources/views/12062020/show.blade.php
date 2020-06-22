@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-header">{{ $title }} {{ $data->nama_bagian }}</div>
                    <div class="card-body">
                        <h5>Nama Supervisor</h5>
                        <p>{{ $data->nama_supervisor }}</p>
                        <a href="{{ route('bagian.index') }}" class="btn btn-sm btn-danger float-right">Kembali</a>
                        <a href="{{ route('bagian.edit', $data->id) }}" class="btn btn-sm btn-success float-right mr-1">Perbarui</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection