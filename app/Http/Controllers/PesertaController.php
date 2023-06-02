<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Detail_pelatihan;
use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\Jenis_pelatihan;
use App\Models\Jenkel;
use App\Models\Modul;
use App\Models\Peserta;
use App\Models\Sertifikat;
use App\Models\Status;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Driver\Selector;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.peserta', [
            'pesertas' => Peserta::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenkels = Jenkel::all();
        $statuses = Status::all();
        $sertifikats = Sertifikat::all();
        $pelatihans = Detail_pelatihan::all();
        $moduls = Modul::all();
        $desas = Desa::all();
        $jabatans = Jabatan::all();
        $golongans = Golongan::all();
        return view('dashboard.peserta', compact('desas', 'jabatans', 'pelatihans', 'golongans', 'jenkels', 'statuses', 'moduls', 'sertifikats'));
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
            'nama_jabatan' => 'required',
            'nama_desa' => 'required',
            'pangkat' => 'required',
            'status_lulus' => 'required',
            'nip' => 'required',
            'nik' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'jenkel' => 'required',
            'asal_peserta' => 'required',
            'usia' => 'required',
            'tanggal_lahir' => 'required',
            'modul' => 'required'
        ]);
        
        Peserta::create($validatedData);

        return redirect('/dashboard/posts/peserta')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $pesertum)
    {
        // $pesertas = Peserta::all();
        $pesertas = Peserta::where('id', $pesertum->id)->get();
        // dd($pesertum);
        return view('dashboard.posts.peserta-show', compact('pesertas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Peserta $pesertum)
    {
        return view('dashboard.peserta-edit', [
            'pesertum' => $pesertum,
            'pesertas' => Peserta::all(),
            'jenkels' => Jenkel::all(),
            'desas' => Desa::all(),
            'golongans' => Golongan::all(),
            'jabatans' => Jabatan::all(),
            'statuses' => Status::all(),
            'moduls' => Modul::all(),
            'sertifikats' => Sertifikat::all(),
            'pelatihans' => Jenis_pelatihan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peserta $pesertum)
    {
        $rules = [
            'nama_jabatan' => 'required',
            'nama_desa' => 'required',
            'pangkat' => 'required',
            'status_lulus' => 'required',
            'nip' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'jenkel' => 'required',
            'asal_peserta' => 'required',
            'usia' => 'required',
            'tanggal_lahir' => 'required',
            'modul' => 'required',
            'nmr_sertifikat' => 'nullable'
        ];

        if($request->nik != $pesertum->nik) {
            $rules['nik'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Peserta::where('id', $pesertum->id)
                ->update($validatedData);

        return redirect('/dashboard/posts/peserta')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peserta $pesertum)
    {
        // dd($pesertum);
        Peserta::destroy($pesertum->id);
        return redirect('/dashboard/posts/peserta')->with('success', 'Data berhasil di hapus');
    }
}
