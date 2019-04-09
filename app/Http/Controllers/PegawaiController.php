<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->get();

        // mengirim data pegawai ke view index
        return view('index',['pegawai' => $pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //input data ke db
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_umur' => $request->umur,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_alamat' => $request->address
        ]);

        return redirect('/pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //mengambil data pegawai berdasarkan id yang di pilih
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();

        // passing data pegawai yang di dapat ke view edit
        return view('edit', ['pegawai'=>$pegawai]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //update data pegawai
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama'    => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur'    => $request->umur,
            'pegawai_alamat'  => $request->address
        ]);

        // alihkan ke halaman ke dalam halaman pegawai
        return redirect ('/pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // hapus pegawai
        DB::table('pegawai')->where('pegawai_id', $id)->delete();

        // alihkan halaman
        return redirect('/pegawai');
    }
}
