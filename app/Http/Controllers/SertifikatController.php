<?php

namespace App\Http\Controllers;

use App\Models\Detail_pelatihan;
use App\Models\Jenis_pelatihan;
use App\Models\Peserta;
use App\Models\Sertifikat;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peserta = Peserta::with('peserta');
        $jenis_pelatihan = Jenis_pelatihan::with('jenis_pelatihan');
        return view('dashboard.posts.sertifikat', [
            'sertifikats' => Sertifikat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pesertas = Peserta::all();
        $jenis_pelatihans = Jenis_pelatihan::all();
        return view('dashboard.sertifikat', compact('pesertas', 'jenis_pelatihans'));
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
            'nama_pelatihan' => 'required',
            'nmr_sertifikat' => 'required',
            'nip' => 'required',
            'tgl_sertifikat' => 'required'
        ]);
        
        Sertifikat::create($validatedData);

        return redirect('/dashboard/posts/sertifikat')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(Sertifikat $sertifikat)
    {
        return view('dashboard.sertifikat-edit', [
            'sertifikat' => $sertifikat,
            'sertifikats' => Sertifikat::all(),
            'pesertas' => Peserta::all(),
            'jenis_pelatihans' => Jenis_pelatihan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sertifikat $sertifikat)
    {
        $rules = [
            'nama_pelatihan' => 'required',
            'nip' => 'required',
            'tgl_sertifikat' => 'required'
        ];

        if($request->nmr_sertifikat != $sertifikat->nmr_sertifikat) {
            $rules['nmr_sertifikat'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Sertifikat::where('id', $sertifikat->id)
                ->update($validatedData);

        return redirect('/dashboard/posts/sertifikat')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sertifikat $sertifikat)
    {
        Sertifikat::destroy($sertifikat->id);
        return redirect('/dashboard/posts/sertifikat')->with('success', 'Data berhasil di hapus');
    }
}
