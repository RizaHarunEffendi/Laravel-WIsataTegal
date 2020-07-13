@extends('layouts.master')

@section('title', 'Detail Wilayah')


@section('content')

<h1 class="mt-4">Detail Wilayah</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Wilayah</li>
</ol>

<div class="card mb-4">
    <div class="card-header"><i class="fas fa-map-signs mr-1"></i></i>Detail Wilayah</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                {{-- <thead>
                    <tr>
                        <th>No</th>
                        <th>Wilayah</th>
                        <th>Nama Wisata</th>
                    </tr>
                </thead> --}}
                <tbody>
                    {{-- @php
                        $no = 1;
                    @endphp --}}
                    @foreach ($wilayah as $w)
                    <tr>
                        <th>Nama Wilayah</th>
                        <td>{{$w->nama_wilayah}}</td>
                    </tr>
                    <tr>
                        <th>Nama Wisata</th>
                        <td>
                            @foreach ($wisata as $item)
                                <li>{{$item->nama_wisata}}</li>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>View PDF</th>
                        <td><a href="{{ asset('/storage/'.$w->pdf) }}" target="_blank">{{$w->pdf}}</a></td>
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
