@extends('layouts.master')

@section('title', 'Wisata')


@section('content')

<h1 class="mt-4">Data Wisata</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Wisata</li>
</ol>

{{-- @if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    <span>{{ $message }}</span>
</div>
@endif --}}

<a href="{{ route('wisata.create') }}" class="btn btn-primary">Tambah Data</a>

<div class="card mb-4 mt-2">
    <div class="card-header"><i class="far fa-list-alt mr-1"></i>Data Wisata</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Wisata</th>
                        <th>Jam Buka</th>
                        <th>Jam Tutup</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: {url:"{{ route('wisata.index') }}"},
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'nama_wisata', name: 'nama_wisata'},
                {data: 'jam_buka', name: 'jam_buka'},
                {data: 'jam_tutup', name: 'jam_tutup'},
                {data: 'action', name: 'action',orderable : false, searchable: false}
            ]
          });
        });
    function deleteData(id) {
        swal({
            title: "Anda Yakin ?",
            text: "Data terhapus!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });
            if (willDelete) {
                $('#data' + id).submit();
            }
        })
    }
</script>
@endsection
