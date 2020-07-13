@extends('layouts.master')

@section('title', 'Edit Wisata')


@section('content')

    <h1 class="mt-4">Edit Data Wisata</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Wisata</li>
    </ol>

    <div class="card">
        <div class="card-body">
            @foreach ($wisata as $w)
            <form action="{{ route('wisata.update', [$w->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    {{ method_field('PUT') }}
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label>Nama :</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"  value="{{$w->nama_wisata}}" autocomplete="off">
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
                                @foreach ($wilayah as $item)
                                    <option value="{{$item->id}}"
                                    @if ($w->wilayah_id == $item->id)
                                        selected
                                    @endif
                                        >{{$item->nama_wilayah}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label>Deskripsi :</label>
                            <textarea name="deskripsi" rows="3" class="form-control @error('deskripsi') is-invalid @enderror">{{$w->deskripsi}}</textarea>
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
                            <input type="time" name="jam_buka" class="form-control" value="{{$w->jam_buka}}" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="form-group">
                            <label>Jam Tutup :</label>
                            <input type="time" name="jam_tutup" class="form-control" value="{{$w->jam_tutup}}" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <hr>
                        @if($w->gambar)
                            <img width="25%" src="{{asset('/storage/'.$w->gambar)}}">
                        @else
                            <img src="https://duniatravel.co.id/wp-content/uploads/logo-wonderful-indonesia.jpg" alt="" width="25%">
                        @endif
                        <hr>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label>Ubah Gambar :</label>
                            <input type="file" name="gambar" class="form-control-file @error('gambar') is-invalid @enderror" autocomplete="off">
                            @error('gambar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label>View PDF :</label><br>
                            @if($w->pdf)
                                <a href="{{ asset('/storage/'.$w->pdf) }}" target="_blank">{{$w->pdf}}</a>
                            @else
                                <img src="https://www.bbrmotorsports.com/Common/CustomControls/PDF_Thumbnail/PDF_Not_Found.jpg" alt="" width="10%">
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label>Ubah Berkas PDF :</label>
                            <input type="file" name="pdf" class="form-control-file @error('pdf') is-invalid @enderror" autocomplete="off">
                            @error('pdf')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                @endforeach
                <button type="submit" class="btn btn-success mt-2">Update</button>
            </form>             
        </div>
    </div>

@endsection