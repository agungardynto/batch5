@extends('layouts.app')
@section('ex-css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('ex-js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(".js-example-placeholder-multiple").select2({
        placeholder: "Pilih Hobi Kamu"
    });
</script>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-header">{{ $title }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('karyawan.update', $data->id) }}">
                            @method('patch')

                            @csrf
    
                            <div class="form-group row">
                                <label for="nik" class="col-md-4 col-form-label text-md-right">NIK</label>
    
                                <div class="col-md-6">
                                    <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') ?? $data->nik }}" required autocomplete="off" autofocus>
    
                                    @error('nik')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="nama" class="col-md-4 col-form-label text-md-right">Nama Karyawan</label>
    
                                <div class="col-md-6">
                                    <input id="nama" type="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') ?? $data->nama }}" required autocomplete="off">
    
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-right">Jenis Kelamin</label>
    
                                <div class="col-md-6">
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="custom-select @error('jenis_kelamin') is-invalid @enderror">
                                        <option value="L" {{ old('jenis_kelamin') ?? $data->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki - Laki</option>
                                        <option value="P" {{ old('jenis_kelamin') ?? $data->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
    
                                    @error('jenis_kelamin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="bagian" class="col-md-4 col-form-label text-md-right">Bagian</label>
    
                                <div class="col-md-6">
                                    <select name="bagian" id="bagian" class="custom-select @error('bagian') is-invalid @enderror">
                                        <option value="" selected hidden disabled>Pilih</option>
                                        @foreach ($bagian as $datas)
                                        <option value="{{ $datas->id }}" {{ $datas->id == $data->bagian ? 'selected' : '' }}>{{ $datas->nama_bagian }}</option>
                                        @endforeach
                                    </select>
    
                                    @error('bagian')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nomor_hp" class="col-md-4 col-form-label text-md-right">Nomor Telepon</label>
    
                                <div class="col-md-6">
                                    <input id="nomor_hp" type="nomor_hp" class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp" value="{{ old('nomor_hp') ?? $data->telepon->nomor }}" required autocomplete="off">
    
                                    @error('nomor_hp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>
    
                                <div class="col-md-6">
                                    <input id="alamat" type="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') ?? $data->alamat }}" required autocomplete="off">
    
                                    @error('alamat')
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
                                    <a href="{{ route('karyawan.show', $data->id) }}" class="btn btn-danger">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection