@extends('app')
@section('ex-js')
<script src="{{ asset('js/showImage.js') }}"></script>
@endsection
@section('content')
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-xl-8">
                <form action="{{ route('withimage.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 px-1 justify-content-center">
                            <div class="upload-foto">
                                <img src="{{ Storage::url($data->foto) }}" alt="default-profile" id="foto" class="foto">
                                <div class="browse-images">
                                    <label for="browse" class="pilih-foto">Pilih Foto</label>
                                    <input type="file" name="foto" id="browse" class="form-control-file form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 px-1">
                            <div class="form-group">
                                <label for="kk" class="col-form-label-sm mb-0">NO. KK</label>
                                <input type="text" name="no_kk" id="kk" class="form-control form-control-sm" placeholder="Nomor Kartu Keluarga" value="{{ $data->no_kk }}" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="nama" class="col-form-label-sm mb-0">Nama</label>
                                <input type="text" name="nama" class="form-control form-control-sm" placeholder="Nama Lengkap" value="{{ $data->nama }}" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col px-1">
                            <div class="form-group">
                                <label for="alamat" class="col-form-label-sm mb-0">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control form-control-sm" cols="30" rows="5" placeholder="Alamat Lengkap">{{ $data->alamat }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 px-1">
                            <div class="form-group">
                                <label for="jk" class="col-form-label-sm mb-0">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jk" class="custom-select custom-select-sm">
                                    <option value="L" {{ $data->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki - Laki</option>
                                    <option value="P" {{ $data->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 px-1">
                            <div class="form-group">
                                <label for="status" class="col-form-label-sm mb-0">Status</label>
                                <select name="status" id="status" class="custom-select custom-select-sm">
                                    <option value="Belum Menikah" {{ $data->status == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                    <option value="Menikah" {{ $data->status == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 px-1">
                            <div class="form-group">
                                <label for="pendidikan" class="col-form-label-sm mb-0">Pendidikan</label>
                                <select name="pendidikan" id="pendidikan" class="custom-select custom-select-sm">
                                    <option value="SD" {{ $data->pendidikan == 'SD' ? 'selected' : '' }}>SD</option>
                                    <option value="SMP" {{ $data->pendidikan == 'SMP' ? 'selected' : '' }}>SMP</option>
                                    <option value="SMA" {{ $data->pendidikan == 'SMA' ? 'selected' : '' }}>SMA</option>
                                    <option value="D1" {{ $data->pendidikan == 'D1' ? 'selected' : '' }}>D1</option>
                                    <option value="D2" {{ $data->pendidikan == 'D2' ? 'selected' : '' }}>D2</option>
                                    <option value="D3" {{ $data->pendidikan == 'D3' ? 'selected' : '' }}>D3</option>
                                    <option value="S1" {{ $data->pendidikan == 'S1' ? 'selected' : '' }}>S1</option>
                                    <option value="S2" {{ $data->pendidikan == 'S2' ? 'selected' : '' }}>S2</option>
                                    <option value="S3" {{ $data->pendidikan == 'S3' ? 'selected' : '' }}>S3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col px-1">
                            <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-block btn-success">Perbarui</button>
                                <a href="{{ route('withimage.index') }}" class="btn btn-sm btn-block btn-danger">Kembali</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection