<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Evaluasi;
use App\Models\Jenis_pelatihan;
use App\Models\Kab_kota;
use App\Models\Kecamatan;
use App\Models\Pengajar;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class EvaluasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.evaluasi', [
            'evaluasis' => Evaluasi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsis = Provinsi::all();
        $kab_kotas = Kab_kota::all();
        $kecamatans = Kecamatan::all();
        $desas = Desa::all();
        $jenis_pelatihans = Jenis_pelatihan::all();
        $pengajars = Pengajar::all();
        return view('dashboard.evaluasi', 
            compact('provinsis', 'kab_kotas', 'kecamatans', 'desas', 'jenis_pelatihans', 'pengajars'));
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
            'nama_prov' => 'required',
            'nama_kota' => 'required',
            'nama_kec' => 'required',
            'nama_desa' => 'required',
            'nama_pelatihan' => 'required',
            'jml_angkatan' => 'required',
            'nama_pengajar' => 'required',
            'modul' => 'required'
            
        ]);

        if($request->file('modul')) {
            $validatedData['modul'] = $request->file('modul')->store('modul');
        }
        
        Evaluasi::create($validatedData);

        return redirect('/dashboard/posts/evaluasi')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluasi $evaluasi)
    {
        // $pesertas = Peserta::all();
        $evaluasis = Evaluasi::where('id', $evaluasi->id)->get();
        // dd($pesertum);
        return view('dashboard.posts.evaluasi-show', compact('evaluasis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluasi $evaluasi)
    {
        return view('dashboard.evaluasi-edit', [
            'evaluasi' => $evaluasi,
            'evaluasis' => Evaluasi::all(),
            'provinsis' => Provinsi::all(),
            'kab_kotas' => Kab_kota::all(),
            'kecamatans' => Kecamatan::all(),
            'jenis_pelatihans' => Jenis_pelatihan::all(),
            'pengajars' => Pengajar::all(),
            'desas' => Desa::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluasi $evaluasi)
    {
        $rules = [
            'nama_prov' => 'required',
            'nama_kota' => 'required',
            'nama_kec' => 'required',
            'nama_desa' => 'required',
            'nama_pelatihan' => 'required',
            'jml_angkatan' => 'required',
        ];

        if($request->nama_pengajar != $evaluasi->nama_pengajar) {
            $rules['nama_pengajar'] = 'required';
        }

        if($request->file('modul')) {
            $validatedData['modul'] = $request->file('modul')->store('modul');
        }

        $validatedData = $request->validate($rules);

        Evaluasi::where('id', $evaluasi->id)
                ->update($validatedData);

        return redirect('/dashboard/posts/evaluasi')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluasi $evaluasi)
    {
        Evaluasi::destroy($evaluasi->id);
        return redirect('/dashboard/posts/evaluasi')->with('success', 'Data berhasil di hapus');
    }
}
