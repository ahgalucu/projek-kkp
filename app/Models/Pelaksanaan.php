<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaksanaan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pengajar()
    {
        return $this->belongsTo(Pengajar::class);
    }

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function pelatihan()
    {
        return $this->belongsTo(Jenis_pelatihan::class);
    }
}
