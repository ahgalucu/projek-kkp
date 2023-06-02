<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }

    public function golongan()
    {
        return $this->belongsTo(Golongan::class);
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function jenkel()
    {
        return $this->belongsTo(Jenkel::class);
    }

    public function modul()
    {
        return $this->belongsTo(Modul::class);
    }
    
    public function sertifikat()
    {
        return $this->belongsTo(Sertifikat::class);
    }

    public function pelatihan()
    {
        return $this->belongsTo(Detail_pelatihan::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
