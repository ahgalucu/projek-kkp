<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\Jenis_pelatihan;
use App\Models\Kab_kota;
use App\Models\Kecamatan;
use App\Models\Peserta;
use App\Models\Provinsi;
use App\Models\Tot;
use App\Models\Totm;
use Illuminate\Http\Request;

class TotmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.totm', [
            'totms' => Totm::all()
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
        return view('dashboard.totm', 
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
        
        Totm::create($validatedData);

        return redirect('/dashboard/posts/totm')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Totm $totm)
    {
        // $pesertas = Peserta::all();
        $totms = Totm::where('id', $totm->id)->get();
        // dd($pesertum);
        return view('dashboard.posts.totm-show', compact('totms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Totm $totm)
    {
        return view('dashboard.totm-edit', [
            'totm' => $totm,
            'totms' => Totm::all(),
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
    public function update(Request $request, Totm $totm)
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

        if($request->nik != $totm->nik) {
            $rules['nik'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Totm::where('id', $totm->id)
                ->update($validatedData);

        return redirect('/dashboard/posts/totm')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Totm $totm)
    {
        Totm::destroy($totm->id);
        return redirect('/dashboard/posts/totm')->with('success', 'Data berhasil di hapus');
    }
}
