<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\Jenis_pelatihan;
use App\Models\Kab_kota;
use App\Models\Kecamatan;
use App\Models\Pad;
use App\Models\Peserta;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class PadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.pad', [
            'pads' => Pad::all()
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
        $kab_kotas = Kab_kota::all();
        $kecamatans = Kecamatan::all();
        $desas = Desa::all();
        $jenis_pelatihans = Jenis_pelatihan::all();
        $pesertas = Peserta::all();
        $jabatans = Jabatan::all();
        $golongans = Golongan::all();
        return view('dashboard.pad', 
            compact('provinsis', 'kab_kotas', 'kecamatans', 'desas', 'jenis_pelatihans', 'pesertas', 'jabatans', 'golongans'));
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
            'nama_prov' => 'required',
            'nama_kota' => 'required',
            'nama_kec' => 'required',
            'nama_desa' => 'required',
            'nama_pelatihan' => 'required',
            'tgl_pelatihan' => 'required',
            'waktu_pelaksanaan' => 'required',
            'nama_peserta' => 'required',
            'nik' => 'required',
            'nip' => 'required',
            'asal_daerah' => 'required',
            'tgl_lahir' => 'required',
            'jenkel' => 'required',
            'usia' => 'required',
            'pendidikan_terakhir' => 'required',
            'nama_jabatan' => 'required',
            'pendidikan_terakhir' => 'required',
            'pangkat' => 'required',
            'nilai' => 'required',
            'status_lulus' => 'required'
        ]);
        
        Pad::create($validatedData);

        return redirect('/dashboard/posts/pad')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pad $pad)
    {
        // $pesertas = Peserta::all();
        $pads = Pad::where('id', $pad->id)->get();
        // dd($pesertum);
        return view('dashboard.posts.pad-show', compact('pads'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pad $pad)
    {
        return view('dashboard.pad-edit', [
            'pad' => $pad,
            'pads' => Pad::all(),
            'provinsis' => Provinsi::all(),
            'kab_kotas' => Kab_kota::all(),
            'kecamatans' => Kecamatan::all(),
            'jenis_pelatihans' => Jenis_pelatihan::all(),
            'jabatans' => Jabatan::all(),
            'golongans' => Golongan::all(),
            'desas' => Desa::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pad $pad)
    {
        $rules = [
            'nama_prov' => 'required',
            'nama_kota' => 'required',
            'nama_kec' => 'required',
            'nama_desa' => 'required',
            'nama_pelatihan' => 'required',
            'tgl_pelatihan' => 'required',
            'waktu_pelaksanaan' => 'required',
            'nama_peserta' => 'required',
            'asal_daerah' => 'required',
            'tgl_lahir' => 'required',
            'jenkel' => 'required',
            'usia' => 'required',
            'pendidikan_terakhir' => 'required',
            'nama_jabatan' => 'required',
            'pendidikan_terakhir' => 'required',
            'pangkat' => 'required',
            'nilai' => 'required',
            'status_lulus' => 'required'
        ];

        if($request->nik != $pad->nik) {
            $rules['nik'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Pad::where('id', $pad->id)
                ->update($validatedData);

        return redirect('/dashboard/posts/pad')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pad $pad)
    {
        Pad::destroy($pad->id);
        return redirect('/dashboard/posts/pad')->with('success', 'Data berhasil di hapus');
    }
}
