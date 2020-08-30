@extends('layout')

@section('title', 'Create Employee')

@push('css')
<link href="#"/>
<style>
    body{
        background-color: cyan;
    }
</style>
@endpush

@section('content')
<div class="card">
    <h5 class="card-header">
        Insert Employee
    </h5>
    <div class="card-body">
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Nama Pegawai</label>
                <input type="text" class="form-control" id="name" placeholder="Nama Lengkap Pegawai">
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" placeholder="Jabatan">
            </div>
            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="number" class="form-control" id="telephone" placeholder="Nomor Telephone">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" placeholder="Alamat Lengkap" rows="8"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ route('index') }}" class="btn btn-light">Batal</a>
        </form>
    </div>
</div>
@endsection

@push('js')
<script>
    console.log('yaya cantik');
</script>
@endpush