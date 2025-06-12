<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Rule;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::all();
        return view('diagnosa.index', compact('gejalas'));
    }

    public function proses(Request $request)
    {
        $selectedGejala = $request->input('gejala', []);
        $selectedGejala = array_map('intval', $selectedGejala);

        $matchedRule = null;

        $rules = Rule::with(['gejalas', 'masalah.solusi'])->get();

        foreach ($rules as $rule) {
            $ruleGejala = $rule->gejalas->pluck('id')->toArray();

            // ✅ Cocok jika semua gejala di rule ada dalam input user (boleh lebih banyak)
            if (empty(array_diff($ruleGejala, $selectedGejala))) {
                $matchedRule = $rule;
                break;
            }
        }

        $selectedSymptoms = \App\Models\Gejala::whereIn('id', $selectedGejala)->get();

        return view('diagnosa.hasil', compact('matchedRule', 'selectedSymptoms'));
    }
}
