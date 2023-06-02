<?php

namespace App\Http\Controllers;

use App\Models\Jenkel;
use Illuminate\Http\Request;

class JenkelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.jenkel', [
            'jenkels' => Jenkel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jenkel');
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
            'jenkel' => 'required|max:20'
        ]);
        
        Jenkel::create($validatedData);

        return redirect('/dashboard/posts/jenkel')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(Jenkel $jenkel)
    {
        return view('dashboard.jenkel-edit', [
            'jenkel' => $jenkel,
            'jenkels' => Jenkel::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jenkel $jenkel)
    {
        $rules = [
            'jenkel' => 'required'
        ];

        if($request->jenkel != $jenkel->jenkel) {
            $rules['jenkel'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Jenkel::where('id', $jenkel->id)
                ->update($validatedData);

        return redirect('/dashboard/posts/jenkel')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenkel $jenkel)
    {
        Jenkel::destroy($jenkel->id);
        return redirect('/dashboard/posts/jenkel')->with('success', 'Data berhasil di hapus');
    }
}
