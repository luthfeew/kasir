@extends('adminlte::page')

@section('content_header')
<h1>Data Barang</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('item.create') }}" class="btn btn-primary mb-3"><i class="fa fa-plus"></i></a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Harga Beli</th>
                            <th scope="col">Harga Jual</th>
                            <th scope="col">Kategori Barang</th>
                            <th scope="col">Merk Barang</th>
                            <th scope="col">Satuan Barang</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($barangs as $barang)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$barang->kode_barang}}</td>
                            <td>{{$barang->nama_barang}}</td>
                            <td>{{$barang->total_stok}}</td>
                            <td>{{$barang->harga_beli}}</td>
                            <td>{{$barang->harga_jual}}</td>
                            <td>{{$barang->kategori_barang}}</td>
                            <td>{{$barang->merk_barang}}</td>
                            <td>{{$barang->satuan_barang}}</td>
                            <td>{{$barang->keterangan}}</td>
                            <td>
                                <a href="{{route('item.edit', $barang->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('item.destroy', $barang->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="11" class="text-center">Tidak ada data</td>
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