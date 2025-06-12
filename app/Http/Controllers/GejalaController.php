<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::all();
        return view('admin.gejala.index', compact('gejalas'));
    }

    public function create()
    {
        return view('admin.gejala.create');
    }

    public function store(Request $request)
    {
        $request->validate(['kode' => 'required', 'nama_gejala' => 'required']);
        Gejala::create($request->all());
        return redirect()->route('gejala.index');
    }

    public function edit(Gejala $gejala)
    {
        return view('admin.gejala.edit', compact('gejala'));
    }

    public function update(Request $request, Gejala $gejala)
    {
        $gejala->update($request->all());
        return redirect()->route('gejala.index');
    }

    public function destroy(Gejala $gejala)
    {
        $gejala->delete();
        return redirect()->route('gejala.index');
    }
}
