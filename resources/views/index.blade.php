@extends('layouts.app')

@section('judul_halaman', 'Data Pegawai')

@section('kontent')
    <a class="mb-3 btn btn-primary" href="/pegawai/tambah" >Tambah</a>
    <table class="table table-hovered">
        <thead>
            <tr>
                <td>Nama</td>
                <td>Jabatan</td>
                <td>Umur</td>
                <td>Alamat</td>
                <td>Opsi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $p)
                <tr>
                    <td>
                        {{ $p->pegawai_nama }}
                    </td>
                    <td>
                        {{ $p->pegawai_jabatan }}
                    </td>
                    </td>
                    <td>
                        {{ $p->pegawai_umur }}
                    </td>
                    </td>
                    <td>
                        {{ $p->pegawai_alamat }}
                    </td>
                    <td>
                        <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/pegawai/delete/{{ $p->pegawai_id }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection