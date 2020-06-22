@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-header">{{ $title }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('bagian.update', $data->id) }}">
                            @method('patch')

                            @csrf
    
                            <div class="form-group row">
                                <label for="nama_bagian" class="col-md-4 col-form-label text-md-right">Nama Bagian</label>
    
                                <div class="col-md-6">
                                    <input id="nama_bagian" type="text" class="form-control @error('nama_bagian') is-invalid @enderror" name="nama_bagian" value="{{ old('nama_bagian') ?? $data->nama_bagian }}" required autocomplete="off" autofocus>
    
                                    @error('nama_bagian')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="nama_supervisor" class="col-md-4 col-form-label text-md-right">Nama Supervisor</label>
    
                                <div class="col-md-6">
                                    <input id="nama_supervisor" type="nama_supervisor" class="form-control @error('nama_supervisor') is-invalid @enderror" name="nama_supervisor" value="{{ old('nama_supervisor') ?? $data->nama_supervisor }}" required autocomplete="off">
    
                                    @error('nama_supervisor')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Perbarui
                                    </button>
                                    <a href="{{ route('bagian.show', $data->id) }}" class="btn btn-danger">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection