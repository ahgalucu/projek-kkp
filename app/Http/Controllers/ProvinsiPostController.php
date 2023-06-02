<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class ProvinsiPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.provinsi', [
            'provinsis' => Provinsi::all(),
            'wilayahs' => Wilayah::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wilayahs = Wilayah::all();
        return view('dashboard.provinsi', compact('wilayahs'));
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
            'nama_prov' => 'required|max:50',
            'nama_wilayah' => 'required'
        ]);
        
        Provinsi::create($validatedData);

        return redirect('/dashboard/posts/provinsi')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(Provinsi $provinsi)
    {
        return view('dashboard.provinsi-edit', [
            'provinsi' => $provinsi,
            'provinsis' => Provinsi::all(),
            'wilayahs' => Wilayah::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provinsi $provinsi)
    {
        $rules = [
            'nama_wilayah' => 'required'
        ];

        if($request->nama_prov != $provinsi->nama_prov) {
            $rules['nama_prov'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Provinsi::where('id', $provinsi->id)
                ->update($validatedData);

        return redirect('/dashboard/posts/provinsi')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provinsi $provinsi)
    {
        Provinsi::destroy($provinsi->id);
        return redirect('/dashboard/posts/provinsi')->with('success', 'Data berhasil di hapus');
    }
}
