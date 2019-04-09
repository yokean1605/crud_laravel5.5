@extends('layouts.app')

@section('judul_halaman', "Tambah data pegawai")

@section('kontent')
    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nm_pgw">Nama Pegawai</label>
            <input id="nm_pgw" class="form-control" type="text" name="nama" required>
        </div>
        <div class="form-group">
            <label for="umur">Umur Pegawai</label>
            <input id="umur" class="form-control" type="text" name="umur" required>
        </div>
        <div class="form-group">
            <label for="jabatan">Pegawai jabatan</label>
            <input id="jabatan" class="form-control" type="text" name="jabatan" required>
        </div>
        <div class="form-group">
            <label for="alamat">Text</label>
            <textarea id="alamat" class="form-control" rows="3" name="address" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection