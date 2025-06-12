<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Masalah extends Model
{
    protected $fillable = ['kode', 'nama_masalah'];

    public function rules()
    {
        return $this->hasMany(Rule::class);
    }

    public function solusi()
    {
        return $this->hasOne(\App\Models\Solusi::class);
    }
}
