@extends('layouts.master')

@section('title', 'Detail Wisata')


@section('content')

<h1 class="mt-4">Detail Wisata</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Wisata</li>
</ol>

<div class="card mb-4">
    <div class="card-header"><i class="far fa-list-alt mr-1"></i></i>Detail Wisata</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                @foreach ($wisata as $w)
                    <tr>
                        <th>Nama Wisata</th>
                        <td>{{$w->nama_wisata}}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td>{{$w->deskripsi}}</td>
                    </tr>
                    <tr>
                        <th>Wilayah</th>
                        <td>{{$w->wilayah->nama_wilayah}}</td>
                    </tr>
                    <tr>
                        <th>Jam Buka</th>
                        <td>{{$w->jam_buka}}</td>
                    </tr>
                    <tr>
                        <th>Jam Tutup</th>
                        <td>{{$w->jam_tutup}}</td>
                    </tr>    
                    <tr>
                        <th>Foto</th>
                        <td>
                            @if($w->gambar)
                            <img width="25%" src="{{asset('/storage/'.$w->gambar)}}">
                            @else
                            <img src="https://duniatravel.co.id/wp-content/uploads/logo-wonderful-indonesia.jpg" alt="" width="25%">
                            @endif
                        </td> 
                    </tr>
                    <tr>
                        <th>View PDF</th>
                        <td>
                            @if($w->pdf)
                            <a href="{{ asset('/storage/'.$w->pdf) }}" target="_blank">{{$w->pdf}}</a>
                            @else
                            <img src="https://www.bbrmotorsports.com/Common/CustomControls/PDF_Thumbnail/PDF_Not_Found.jpg" alt="" width="10%">
                            @endif
                        </td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
</div>

@endsection
