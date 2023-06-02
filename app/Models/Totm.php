<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Totm extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function kota()
    {
        return $this->belongsTo(Kab_kota::class);
    }
    
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }

    public function pelatihan()
    {
        return $this->belongsTo(Jenis_pelatihan::class);
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function golongan()
    {
        return $this->belongsTo(Golongan::class);
    }
}
