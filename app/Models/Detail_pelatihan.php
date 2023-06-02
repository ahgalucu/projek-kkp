<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_pelatihan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pelaksanaan()
    {
        return $this->belongsTo(Pelaksanaan::class);
    }

    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    
    public function pelatihan()
    {
        return $this->belongsTo(Jenis_pelatihan::class);
    }
}
