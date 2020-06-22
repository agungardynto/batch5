@extends('app')
@section('ex-js')
<script src="{{ asset('js/showImage.js') }}"></script>
@endsection
@section('content')
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-xl-8">
                <form action="{{ route('withimage.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 px-1 justify-content-center">
                            <div class="upload-foto">
                                <img src="{{ asset('storage/assets/user.png') }}" alt="default-profile" id="foto" class="foto">
                                <div class="browse-images">
                                    <label for="browse" class="pilih-foto">Pilih Foto</label>
                                    <input type="file" name="foto" id="browse" class="form-control-file form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 px-1">
                            <div class="form-group">
                                <label for="kk" class="col-form-label-sm mb-0">NO. KK</label>
                                <input type="text" name="no_kk" id="kk" class="form-control form-control-sm" placeholder="Nomor Kartu Keluarga" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="nama" class="col-form-label-sm mb-0">Nama</label>
                                <input type="text" name="nama" class="form-control form-control-sm" placeholder="Nama Lengkap" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col px-1">
                            <div class="form-group">
                                <label for="alamat" class="col-form-label-sm mb-0">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control form-control-sm" cols="30" rows="5" placeholder="Alamat Lengkap"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 px-1">
                            <div class="form-group">
                                <label for="jk" class="col-form-label-sm mb-0">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jk" class="custom-select custom-select-sm">
                                    <option value="L">Laki - Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 px-1">
                            <div class="form-group">
                                <label for="status" class="col-form-label-sm mb-0">Status</label>
                                <select name="status" id="status" class="custom-select custom-select-sm">
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Menikah">Menikah</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 px-1">
                            <div class="form-group">
                                <label for="pendidikan" class="col-form-label-sm mb-0">Pendidikan</label>
                                <select name="pendidikan" id="pendidikan" class="custom-select custom-select-sm">
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col px-1">
                            <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-block btn-primary">Simpan</button>
                                <a href="{{ route('withimage.index') }}" class="btn btn-sm btn-block btn-danger">Kembali</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection