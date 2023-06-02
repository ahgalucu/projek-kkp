<?php

namespace App\Http\Controllers;

use App\Models\Kab_kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class KabKotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.kab-kota', [
            'kab_kotas' => Kab_kota::all()
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
        return view('dashboard.kab-kota', compact('provinsis'));
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
            'nama_kota' => 'required',
            'nama_prov' => 'required'
        ]);
        
        Kab_kota::create($validatedData);

        return redirect('/dashboard/posts/kab-kota')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(Kab_kota $kab_kotum)
    {
        return view('dashboard.kab-kota-edit', [
            'kab_kotum' => $kab_kotum,
            'kab_kotas' => Kab_kota::all(),
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
    public function update(Request $request, Kab_kota $kab_kotum)
    {
        $rules = [
            'nama_prov' => 'required'
        ];

        if($request->nama_kota != $kab_kotum->nama_kota) {
            $rules['nama_kota'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Kab_kota::where('id', $kab_kotum->id)
                ->update($validatedData);

        return redirect('/dashboard/posts/kab-kota')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kab_kota $kab_kotum)
    {
        // dd($kab_kota);
        Kab_kota::destroy($kab_kotum->id);
        return redirect('/dashboard/posts/kab-kota')->with('success', 'Data berhasil di hapus');
    }
}
