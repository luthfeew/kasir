@extends('adminlte::page')

@section('content_header')
<h1>Tambah Data Barang</h1>
@stop

@section('content')
<div class="row">
    <div class="col-10">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('item.store') }}">
                    @csrf

                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" class="form-control @error('kode_barang') is-invalid @enderror" value="{{ old('kode_barang') }}" id="kode_barang" name="kode_barang">

                        @error('kode_barang')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" value="{{ old('nama_barang') }}" id="nama_barang" name="nama_barang">

                        @error('nama_barang')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="total_stok">Total Stok</label>
                        <input type="number" class="form-control @error('total_stok') is-invalid @enderror" value="{{ old('total_stok') }}" id="total_stok" name="total_stok">

                        @error('total_stok')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga_beli">Harga Beli</label>
                        <input type="number" class="form-control @error('harga_beli') is-invalid @enderror" value="{{ old('harga_beli') }}" id="harga_beli" name="harga_beli">

                        @error('harga_beli')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga_jual">Harga Jual</label>
                        <input type="number" class="form-control @error('harga_jual') is-invalid @enderror" value="{{ old('harga_jual') }}" id="harga_jual" name="harga_jual">

                        @error('harga_jual')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kategori_barang">Kategori Barang</label>
                        <input type="text" class="form-control @error('kategori_barang') is-invalid @enderror" value="{{ old('kategori_barang') }}" id="kategori_barang" name="kategori_barang">

                        @error('kategori_barang')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="merk_barang">Merk Barang</label>
                        <input type="text" class="form-control @error('merk_barang') is-invalid @enderror" value="{{ old('merk_barang') }}" id="merk_barang" name="merk_barang">

                        @error('merk_barang')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="satuan_barang">Satuan Barang</label>
                        <input type="text" class="form-control @error('satuan_barang') is-invalid @enderror" value="{{ old('satuan_barang') }}" id="satuan_barang" name="satuan_barang">

                        @error('satuan_barang')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}" id="keterangan" name="keterangan">

                        @error('keterangan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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