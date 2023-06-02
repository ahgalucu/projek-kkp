<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desa;
use App\Models\Detail_pelatihan;
use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\Jenkel;
use App\Models\Modul;
use App\Models\Peserta;
use App\Models\Sertifikat;
use App\Models\Status;

class PesertaPublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenkel = Jenkel::with('jenkel');
        $jabatan = Jabatan::with('jabatan');
        $golongan = Golongan::with('golongan');
        $modul = Modul::with('modul');
        $setrifikat = Sertifikat::with('sertifikat');
        $pelatihan = Detail_pelatihan::with('pelatihan');
        $status = Status::with('status');
        $desa = Desa::with('desa');
        return view('guest.show', [
            'pesertas' => Peserta::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $peserta)
    {
        $pesertas = Peserta::all();
        $moduls = Modul::all();
        return view('guest.show', compact('pesertas', 'moduls'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
