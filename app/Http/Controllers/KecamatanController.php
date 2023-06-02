<?php

namespace App\Http\Controllers;

use App\Models\Kab_kota;
use App\Models\Kecamatan;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kab_kota = Kab_kota::with('kab_kota');
        return view('dashboard.posts.kecamatan', [
            'kecamatans' => Kecamatan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kab_kotas = Kab_kota::all();
        return view('dashboard.kecamatan', compact('kab_kotas'));
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
            'nama_kec' => 'required|max:255',
            'nama_kota' => 'required'
        ]);
        
        Kecamatan::create($validatedData);

        return redirect('/dashboard/posts/kecamatan')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(Kecamatan $kecamatan)
    {
        return view('dashboard.kecamatan-edit', [
            'kecamatan' => $kecamatan,
            'kecamatans' => Kecamatan::all(),
            'kab_kotas' => Kab_kota::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kecamatan $kecamatan)
    {
        $rules = [
            'nama_kota' => 'required'
        ];

        if($request->nama_kec != $kecamatan->nama_kec) {
            $rules['nama_kec'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Kecamatan::where('id', $kecamatan->id)
                ->update($validatedData);

        return redirect('/dashboard/posts/kecamatan')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kecamatan $kecamatan)
    {
        Kecamatan::destroy($kecamatan->id);
        return redirect('/dashboard/posts/kecamatan')->with('success', 'Data berhasil di hapus');
    }
}
