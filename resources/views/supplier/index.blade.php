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
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')" action="{{ route('supplier.destroy', $supplier->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('supplier.edit', $supplier->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger text-center">
                            Data Pemasok tidak tersedia
                        </div>
                        @endforelse
                    </tbody>
                    <!-- <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>No Telp</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </tfoot> -->
                </table>
            </div>
        </div>

    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let table = new DataTable('#tablepemasok');
    });
    @if(session()->has('success'))
        toastr.success('{{ session('success') }}', 'BERHASIL!'); 
    @elseif(session()->has('error'))
        toastr.error('{{ session('error') }}', 'GAGAL!'); 
    @endif
</script>
@stop