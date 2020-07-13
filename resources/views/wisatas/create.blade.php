@extends('layouts.master')

@section('title', 'Tambah Wisata')


@section('content')

    <h1 class="mt-4">Tambah Data Wisata</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Wisata</li>
    </ol>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('wisata.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label>Nama :</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"  autocomplete="off">
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label>Wilayah :</label>
                            <select name="wilayah_id" class="form-control" id="">
                                    <option value="">Pilih Wilayah</option>
                                @foreach ($wilayah as $w)
                                    <option value="{{$w->id}}">{{$w->nama_wilayah}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label>Deskripsi :</label>
                            <textarea name="deskripsi" rows="3" class="form-control  @error('deskripsi') is-invalid @enderror"></textarea>
                            @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="form-group">
                            <label>Jam Buka :</label>
                            <input type="time" name="jam_buka" class="form-control" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="form-group">
                            <label>Jam Tutup :</label>
                            <input type="time" name="jam_tutup" class="form-control" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label>Gambar :</label>
                            <input type="file" name="gambar" class="form-control-file @error('gambar') is-invalid @enderror">
                            @error('gambar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label>Berkas PDF:</label>
                            <input type="file" name="pdf" id="" class="form-control-file @error('pdf') is-invalid @enderror" autocomplete="off">
                            @error('pdf')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>             
        </div>
    </div>

@endsection