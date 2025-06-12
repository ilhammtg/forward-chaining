<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RuleGejala extends Model
{
    protected $table = 'rule_gejala';

    protected $fillable = ['rule_id', 'gejala_id'];

    public function rule()
    {
        return $this->belongsTo(Rule::class);
    }

    public function gejala()
    {
        return $this->belongsTo(Gejala::class);
    }
}
