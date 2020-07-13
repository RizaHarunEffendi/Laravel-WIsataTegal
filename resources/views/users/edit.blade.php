@extends('layouts.master')

@section('title', 'Edit User')


@section('content')

    <h1 class="mt-4">Edit Data User</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Users</li>
    </ol>

    <div class="card">
        <div class="card-body">
            @foreach ($user as $u)
            <form action="{{ route('user.update', [$u->id]) }}" method="post">
                @csrf
                <div class="row">
                    {{ method_field('PUT') }}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>Nama :</label>
                            <input type="text" name="name" class="form-control" value="{{$u->name}}" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>Email :</label>
                            <input type="email" name="email" class="form-control" value="{{$u->email}}" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>Password :</label>
                            <input type="password" name="password" class="form-control" value="{{$u->password}}" autocomplete="off">
                        </div>
                    </div>
                </div>
                @endforeach
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>

@endsection