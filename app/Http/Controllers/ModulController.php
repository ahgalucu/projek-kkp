<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use App\Models\Jenis_pelatihan;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.modul', [
            'moduls' => Modul::all()
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
        return view('dashboard.modul', compact('jenis_pelatihans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Modul $modul)
    {
        $validatedData = $request->validate([
            'nama_pelatihan' => 'required',
            'modul' => 'mimes:pdf',
            'tahun' => 'required'
        ]);

        if($request->file('modul')) {
            $validatedData['modul'] = $request->file('modul')->store('modul');
        }
        
        Modul::create($validatedData);

        return redirect('/dashboard/posts/modul')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(Modul $modul)
    {
        return view('dashboard.modul-edit', [
            'modul' => $modul,
            'moduls' => Modul::all(),
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
    public function update(Request $request, Modul $modul)
    {
        $rules = [
            'nama_pelatihan' => 'required',
            'tahun' => 'required'
        ];

        if($request->file('modul')) {
            $validatedData['modul'] = $request->file('modul')->store('modul');
        }

        $validatedData = $request->validate($rules);

        Modul::where('id', $modul->id)
                ->update($validatedData);

        return redirect('/dashboard/posts/modul')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modul $modul)
    {
        Modul::destroy($modul->id);
        return redirect('/dashboard/posts/modul')->with('success', 'Data berhasil di hapus');
    }
}
