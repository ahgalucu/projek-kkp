<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.wilayah', [
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
        return view('dashboard.wilayah');
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
            'nama_wilayah' => 'required|max:255'
        ]);
        
        Wilayah::create($validatedData);

        return redirect('/dashboard/posts/wilayah')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Wilayah $wilayah)
    {
        return view('dashboard.wilayah-edit', [
            'wilayah' => $wilayah,
            'wilayahs' => Wilayah::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wilayah $wilayah)
    {
        $rules = [
            'nama_wilayah' => 'required'
        ];

        if($request->nama_wilayah != $wilayah->nama_wilayah) {
            $rules['nama_wilayah'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Wilayah::where('id', $wilayah->id)
                ->update($validatedData);

        return redirect('/dashboard/posts/wilayah')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wilayah $wilayah)
    {
        Wilayah::destroy($wilayah->id);
        return redirect('/dashboard/posts/wilayah')->with('success', 'Data berhasil di hapus');
    }
}
