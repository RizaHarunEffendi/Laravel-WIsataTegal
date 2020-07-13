@extends('layouts.master')

@section('title', 'Edit Wilayah')


@section('content')

    <h1 class="mt-4">Edit Data Wilayah</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Wilayah</li>
    </ol>

    <div class="card">
        <div class="card-body">
            @foreach ($wilayah as $w)
            <form action="{{ route('wilayah.update', [$w->id]) }}" method="post" enctype="multipart/form-data">
                @csrf

                    {{ method_field('PUT') }}
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label>Nama Wilayah :</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"  value="{{$w->nama_wilayah}}" autocomplete="off">
                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <hr>
                        <div class="form-group">
                            <label>View PDF :</label>
                        <a href="{{ asset('/storage/'.$w->pdf)}}" target="_blank">{{$w->pdf}}</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <hr>
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
                @endforeach
                <button type="submit" class="btn btn-success mt-2">Update</button>
            </form>
        </div>
    </div>

@endsection
