<?php

namespace App\Http\Controllers;

use App\Models\Unit_kerja;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinsi = Provinsi::with('provinsi');
        return view('dashboard.posts.unit-kerja', [
            'unit_kerjas' => Unit_kerja::all()
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
        return view('dashboard.unit-kerja', compact('provinsis'));
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
            'nama_unit' => 'required|max:255',
            'nama_prov' => 'required'
        ]);
        
        Unit_kerja::create($validatedData);

        return redirect('/dashboard/posts/unit-kerja')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(Unit_kerja $unit_kerja)
    {
        $unit_kerjas = Unit_kerja::all();
        $provinsis = Provinsi::all();
        return view('dashboard.unit-kerja-edit', [
            'unit_kerja' => $unit_kerja
        ], compact('provinsis', 'unit_kerjas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit_kerja $unit_kerja)
    {
        $rules = [
            'nama_prov' => 'nullable'
        ];

        if($request->nama_unit != $unit_kerja->nama_unit) {
            $rules['nama_unit'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Unit_kerja::where('id', $unit_kerja->id)
                ->update($validatedData);

        return redirect('/dashboard/posts/unit-kerja')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit_kerja $unit_kerja)
    {
        Unit_kerja::destroy($unit_kerja->id);
        return redirect('/dashboard/posts/unit-kerja')->with('success', 'Data berhasil di hapus');
    }
}
