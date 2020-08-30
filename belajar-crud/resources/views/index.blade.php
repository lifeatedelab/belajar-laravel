@extends('layout')

@section('title', 'Index')

@section('content')
<div class="card">
    <h5 class="card-header">
        Employee Table
        <a href="{{ url('/home/create') }}" class="btn btn-dark float-right">Insert Employee</a>
    </h5>
    <div class="card-body">
        <table class="table table-sm datatable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">No Telephone</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Nama Pegawai</td>
                    <td>Jabatan</td>
                    <td>No Telephone</td>
                    <td>Alamat</td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Nama Pegawai</td>
                    <td>Jabatan</td>
                    <td>No Telephone</td>
                    <td>Alamat</td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Nama Pegawai</td>
                    <td>Jabatan</td>
                    <td>No Telephone</td>
                    <td>Alamat</td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Nama Pegawai</td>
                    <td>Jabatan</td>
                    <td>No Telephone</td>
                    <td>Alamat</td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Nama Pegawai</td>
                    <td>Jabatan</td>
                    <td>No Telephone</td>
                    <td>Alamat</td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection