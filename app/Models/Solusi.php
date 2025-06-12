<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solusi extends Model
{
    protected $fillable = ['masalah_id', 'isi_solusi'];

    public function masalah()
    {
        return $this->belongsTo(Masalah::class);
    }
}
