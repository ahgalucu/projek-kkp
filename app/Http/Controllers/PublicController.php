<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\Jenkel;
use App\Models\Peserta;
use Illuminate\Http\Request;

class PublicController extends Controller
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
        $desa = Desa::with('desa');
        return view('guest.dashboard', [
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
    public function show(Peserta $dashboard)
    {
        // $pesertas = Peserta::all();
        $pesertas = Peserta::where('id', $dashboard->id)->get();
        return view('guest.show', compact('pesertas'));
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
