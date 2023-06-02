<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.golongan', [
            'golongans' => Golongan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.golongan');
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
            'pangkat' => 'required|max:255'
        ]);
        
        Golongan::create($validatedData);

        return redirect('/dashboard/posts/golongan')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(Golongan $golongan)
    {
        return view('dashboard.golongan-edit', [
            'golongan' => $golongan,
            'golongans' => Golongan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Golongan $golongan)
    {
        $rules = [
            'pangkat' => 'required'
        ];

        if($request->pangkat != $golongan->pangkat) {
            $rules['pangkat'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Golongan::where('id', $golongan->id)
                ->update($validatedData);

        return redirect('/dashboard/posts/golongan')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Golongan $golongan)
    {
        Golongan::destroy($golongan->id);
        return redirect('/dashboard/posts/golongan')->with('success', 'Data berhasil di hapus');
    }
}
