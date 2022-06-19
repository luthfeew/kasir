@extends('adminlte::page')

@section('content_header')
<h1>Data Supplier</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('supplier.create') }}" class="btn btn-primary mb-3"><i class="fa fa-plus"></i></a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($suppliers as $supplier)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$supplier->nama}}</td>
                            <td>{{$supplier->no_telp}}</td>
                            <td>{{$supplier->alamat}}</td>
                            <td>{{$supplier->email}}</td>
                            <td>
                                <a href="{{route('supplier.edit', $supplier->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('supplier.destroy', $supplier->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
<!-- <script> console.log('Hi!'); </script> -->
@stop