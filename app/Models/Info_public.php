<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info_public extends Model
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
}
