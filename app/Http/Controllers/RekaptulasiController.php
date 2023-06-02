<?php

namespace App\Http\Controllers;

use App\Models\Jenis_pelatihan;
use App\Models\Rekaptulasi;
use Illuminate\Http\Request;

class RekaptulasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.rekaptulasi', [
            'rekaptulasis' => Rekaptulasi::all()
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
        return view('dashboard.rekaptulasi', compact('jenis_pelatihans'));
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
            'nama_pelatihan' => 'required|max:255',
            'jml_pelaksanaan' => 'required',
            'tahun' => 'required'
        ]);
        
        Rekaptulasi::create($validatedData);

        return redirect('/dashboard/posts/rekaptulasi')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(Rekaptulasi $rekaptulasi)
    {
        return view('dashboard.rekaptulasi-edit', [
            'rekaptulasi' => $rekaptulasi,
            'rekaptulasis' => Rekaptulasi::all(),
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
    public function update(Request $request, Rekaptulasi $rekaptulasi)
    {
        $rules = [
            'nama_pelatihan' => 'required',
            'jml_pelaksanaan' => 'required',
            'tahun' => 'required'
        ];

        if($request->nama_pelatihan != $rekaptulasi->nama_pelatihan) {
            $rules['nama_pelatihan'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Rekaptulasi::where('id', $rekaptulasi->id)
                ->update($validatedData);

        return redirect('/dashboard/posts/rekaptulasi')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rekaptulasi $rekaptulasi)
    {
        Rekaptulasi::destroy($rekaptulasi->id);
        return redirect('/dashboard/posts/rekaptulasi')->with('success', 'Data berhasil di hapus');
    }
}
