<?php

namespace App\Http\Controllers;

use App\Models\Detail_pelatihan;
use App\Models\Pelaksanaan;
use App\Models\Pengajar;
use App\Models\Provinsi;
use App\Models\Jenis_pelatihan;
use Illuminate\Http\Request;

class PelaksanaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajar = Pengajar::with('pengajar');
        $provinsi = Provinsi::with('provinsi');
        return view('dashboard.posts.pelaksanaan', [
            'pelaksanaans' => Pelaksanaan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_pelatihans = Jenis_pelatihan::all();
        $pengajars = Pengajar::all();
        $provinsis = Provinsi::all();
        return view('dashboard.pelaksanaan', compact('pengajars', 'provinsis', 'jenis_pelatihans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pengajar' => 'required',
            'nama_prov' => 'required',
            'nama_pelatihan' => 'required',
            'tgl_awal' => 'required',
            'tgl_akhir' => 'required'
        ]);
        
        Pelaksanaan::create($validatedData);

        return redirect('/dashboard/posts/pelaksanaan')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(Pelaksanaan $pelaksanaan)
    {
        return view('dashboard.pelaksanaan-edit', [
            'pelaksanaan' => $pelaksanaan,
            'pelaksanaans' => Pelaksanaan::all(),
            'jenis_pelatihans' => Jenis_pelatihan::all(),
            'pengajars' => Pengajar::all(),
            'provinsis' => Provinsi::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelaksanaan $pelaksanaan)
    {
        $rules = [
            'nama_prov' => 'required',
            'nama_pelatihan' => 'required',
            'tgl_awal' => 'required',
            'tgl_akhir' => 'required'
        ];

        if($request->nama_pengajar != $pelaksanaan->nama_pengajar) {
            $rules['nama_pengajar'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Pelaksanaan::where('id', $pelaksanaan->id)
                ->update($validatedData);

        return redirect('/dashboard/posts/pelaksanaan')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelaksanaan $pelaksanaan)
    {
        Pelaksanaan::destroy($pelaksanaan->id);
        return redirect('/dashboard/posts/pelaksanaan')->with('success', 'Data berhasil di hapus');
    }
}
