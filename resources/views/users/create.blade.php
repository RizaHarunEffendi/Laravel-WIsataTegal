@extends('layouts.master')

@section('title', 'Tambah User')


@section('content')

    <h1 class="mt-4">Tambah Data User</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Users</li>
    </ol>

    <div class="card">
        <div class="card-body">
        <form action="{{ route('user.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>Nama :</label>
                            <input type="text" name="name" class="form-control"  autocomplete="off">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>Email :</label>
                            <input type="email" name="email" class="form-control" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>Password :</label>
                            <input type="password" name="password" class="form-control" autocomplete="off">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>

@endsection
