@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Data Pemasok/Supplier</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">
                <a href="{{ route('supplier.create') }}" class="btn btn-md btn-success mb-3"><i class="fa fa-plus"></i></a>
                <table id="tablepemasok" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>No Telp</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($suppliers as $supplier)
                        <tr>
                            <td>{{$supplier->nama}}</td>
                            <td>{{$supplier->no_telp}}</td>
                            <td>{{$supplier->alamat}}</td>
                            <td>{{$supplier->email}}</td>
                            <td>-</td>
                        </tr>
                        @empty
                        <div class="alert alert-danger text-center">
                            Data Pemasok tidak tersedia
                        </div>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>No Telp</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@stop

@section('js')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let table = new DataTable('#tablepemasok');
    });
</script>
@stop