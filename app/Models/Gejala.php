<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    protected $fillable = ['kode', 'nama_gejala'];

    public function rules()
    {
        return $this->belongsToMany(Rule::class, 'rule_gejala');
    }
}
