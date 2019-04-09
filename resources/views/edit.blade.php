@extends('layouts.app')

@section('judul_halaman', 'Halaman Edit')

@section('kontent')
    <form action="/pegawai/update" method="post">
        @foreach ($pegawai as $p)
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nm_pgw">Nama Pegawai</label>
                <input id="nm_pgw" class="form-control" type="text" name="nama" value="{{ $p->pegawai_nama }}">
            </div>
            <div class="form-group">
                <label for="umur">Umur Pegawai</label>
                <input id="umur" class="form-control" type="text" name="umur" value="{{ $p->pegawai_umur }}">
            </div>
            <div class="form-group">
                <label for="jabatan">Pegawai jabatan</label>
                <input id="jabatan" class="form-control" type="text" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
            <div class="form-group">
                <label for="alamat">Text</label>
                <textarea id="alamat" class="form-control" rows="3" name="address" >{{ $p->pegawai_alamat }}</textarea>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection