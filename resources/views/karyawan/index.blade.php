@extends('adminlte::page')

@section('content_header')
<h1>Data Karyawan</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('employee.create') }}" class="btn btn-primary mb-3"><i class="fa fa-plus"></i></a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Terakhir Login</th>
                            <th scope="col">IP Address</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($karyawans as $karyawan)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$karyawan->name}}</td>
                            <td>{{$karyawan->email}}</td>
                            <td>{{$karyawan->role}}</td>
                            <td>{{$karyawan->last_login_at}}</td>
                            <td>{{$karyawan->last_login_ip}}</td>
                            <td>
                                <a href="{{route('employee.edit', $karyawan->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('employee.destroy', $karyawan->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Tidak ada data</td>
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