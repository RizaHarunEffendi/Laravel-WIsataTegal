@extends('layouts.master')

@section('title', 'Wilayah')


@section('content')

<h1 class="mt-4">Data wilayah</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Wilayah</li>
</ol>

{{-- @if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    <span>{{ $message }}</span>
</div>
@endif --}}

<a href="{{ route('wilayah.create') }}" class="btn btn-primary mb-2">Tambah Data</a>


<div class="card mb-4">
    <div class="card-header"><i class="fas fa-user-alt mr-1"></i>Data Wilayah</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Wilayah</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {
        var table = $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route("wilayah.index") }}'
            },
            columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'nama_wilayah', name: 'nama_wilayah'},
            {data: 'action', name: 'action',orderable : false, searchable: false}
            ]
          });
        });
    function deleteData(id) {
        swal({
            title: "yakin nih",
            text: "wilayah dengan id = "+id +" ingin di hapus?",
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
                $('#id' + id).submit();
            }
        })
    }
</script>

@endsection
