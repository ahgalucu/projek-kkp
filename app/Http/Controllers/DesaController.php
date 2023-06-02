<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kecamatan = Kecamatan::with('kecamatan');
        return view('dashboard.posts.desa', [
            'desas' => Desa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatans = Kecamatan::all();
        return view('dashboard.desa', compact('kecamatans'));
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
            'nama_desa' => 'required|max:255',
            'nama_kec' => 'required'
        ]);
        
        Desa::create($validatedData);

        return redirect('/dashboard/posts/desa')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(Desa $desa)
    {
        return view('dashboard.desa-edit', [
            'desa' => $desa,
            'desas' => Desa::all(),
            'kecamatans' => Kecamatan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Desa $desa)
    {
        $rules = [
            'nama_kec' => 'required'
        ];

        if($request->nama_desa != $desa->nama_desa) {
            $rules['nama_desa'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Desa::where('id', $desa->id)
                ->update($validatedData);

        return redirect('/dashboard/posts/desa')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desa $desa)
    {
        Desa::destroy($desa->id);
        return redirect('/dashboard/posts/desa')->with('success', 'Data berhasil di hapus');
    }
}
