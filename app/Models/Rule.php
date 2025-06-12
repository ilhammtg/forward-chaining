<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $fillable = ['kode', 'masalah_id'];

    public function gejalas()
    {
        return $this->belongsToMany(\App\Models\Gejala::class, 'rule_gejala');
    }

    public function masalah()
    {
        return $this->belongsTo(\App\Models\Masalah::class);
    }
}
