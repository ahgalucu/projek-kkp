<?php

namespace App\Http\Controllers;

use App\Models\Detail_pelatihan;
use App\Models\Jenis_pelatihan;
use App\Models\Pelaksanaan;
use App\Models\Peserta;
use App\Models\Status;
use Illuminate\Http\Request;

class DetailPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.detail-pelatihan', [
            'detail_pelatihans' => Detail_pelatihan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses = Status::all();
        $jenis_pelatihans = Jenis_pelatihan::all();
        $pesertas = Peserta::all();
        $pelaksanaans = Pelaksanaan::all();
        return view('dashboard.detail-pelatihan', compact('pesertas', 'pelaksanaans', 'statuses', 'jenis_pelatihans'));
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
            'nama_pelatihan' => 'required',
            'nip' => 'required',
            'nilai' => 'required',
            'status_lulus' => 'required'
        ]);
        
        Detail_pelatihan::create($validatedData);

        return redirect('/dashboard/posts/detail-pelatihan')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(Detail_pelatihan $detail_pelatihan)
    {
        return view('dashboard.detail-pelatihan-edit', [
            'detail_pelatihan' => $detail_pelatihan,
            'detail_pelatihans' => Detail_pelatihan::all(),
            'pesertas' => Peserta::all(),
            'Pelaksanaans' => Pelaksanaan::all(),
            'statuses' => Status::all(),
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
    public function update(Request $request, Detail_pelatihan $detail_pelatihan)
    {
        $rules = [
            'nama_pelatihan' => 'required',
            'nilai' => 'required',
            'status_lulus' => 'required'
        ];

        if($request->nip != $detail_pelatihan->nip) {
            $rules['nip'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Detail_pelatihan::where('id', $detail_pelatihan->id)
                ->update($validatedData);

        return redirect('/dashboard/posts/detail-pelatihan')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail_pelatihan $detail_pelatihan)
    {
        Detail_pelatihan::destroy($detail_pelatihan->id);
        return redirect('/dashboard/posts/detail-pelatihan')->with('success', 'Data berhasil di hapus');
    }
}
