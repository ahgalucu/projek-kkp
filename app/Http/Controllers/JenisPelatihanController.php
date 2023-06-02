<?php

namespace App\Http\Controllers;

use App\Models\Jenis_pelatihan;
use Illuminate\Http\Request;

class JenisPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.jenis-pelatihan', [
            'jenis_pelatihans' => Jenis_pelatihan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jenis-pelatihan');
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
            'nama_pelatihan' => 'required|max:255'
        ]);
        
        Jenis_pelatihan::create($validatedData);

        return redirect('/dashboard/posts/jenis-pelatihan');
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
    public function edit(Jenis_pelatihan $jenis_pelatihan)
    {
        return view('dashboard.jenis-pelatihan-edit', [
            'jenis_pelatihan' => $jenis_pelatihan,
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
    public function update(Request $request, Jenis_pelatihan $jenis_pelatihan)
    {
        $rules = [
            'nama_pelatihan' => 'required'
        ];

        if($request->nama_pelatihan != $jenis_pelatihan->nama_pelatihan) {
            $rules['nama_pelatihan'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Jenis_pelatihan::where('id', $jenis_pelatihan->id)
                ->update($validatedData);

        return redirect('/dashboard/posts/jenis-pelatihan')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenis_pelatihan $jenis_pelatihan)
    {
        Jenis_pelatihan::destroy($jenis_pelatihan->id);
        return redirect('/dashboard/posts/jenis-pelatihan')->with('success', 'Data berhasil di hapus');
    }
}
