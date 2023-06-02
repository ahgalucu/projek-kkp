<?php

namespace App\Http\Controllers;

use App\Models\Pengajar;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wilayah = Wilayah::with('wilayah');
        return view('dashboard.posts.pengajar', [
            'pengajars' => Pengajar::all()
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
        return view('dashboard.pengajar', compact('wilayahs'));
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
            'nama_pengajar' => 'required|max:255',
            'no_telp' => 'required|max:12',
            'nama_wilayah' => 'required'
        ]);
        
        Pengajar::create($validatedData);

        return redirect('/dashboard/posts/pengajar')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(Pengajar $pengajar)
    {
        $pengajars = pengajar::all();
        $wilayahs = Wilayah::all();
        return view('dashboard.pengajar-edit', [
            'pengajar' => $pengajar
        ], compact('pengajars', 'wilayahs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengajar $pengajar)
    {
        $rules = [
            'nama_pengajar' => 'required|max:255',
            'no_telp' => 'required|max:12'
        ];

        if($request->nama_wilayah != $pengajar->nama_wilayah) {
            $rules['nama_wilayah'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Pengajar::where('id', $pengajar->id)
                ->update($validatedData);

        return redirect('/dashboard/posts/pengajar')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengajar $pengajar)
    {
        Pengajar::destroy($pengajar->id);
        return redirect('/dashboard/posts/pengajar')->with('success', 'Data berhasil di hapus');
    }
}
