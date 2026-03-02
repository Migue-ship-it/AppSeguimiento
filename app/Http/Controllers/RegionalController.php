<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Regional;
use Illuminate\Http\Request;

class RegionalController extends Controller
{
    public function index()
    {
        $regional = Regional::all();
        return view('regional.index', compact('regional')); 
    }
    public function create()
    {
        return view('regional.create');
    }
    public function store(Request $request)
    {
        $request->validate([
        'codigo' => 'required',
        'denominacion' => 'required'
    ]);
    try {
        Regional::create($request->all());
        return redirect()->route('regional.index')->with('success', 'Creado');
    } catch (\Exception $th) {
         return back()->with('error', 'Creado');
    }
    }
    public function show($nis)
    {
        $regional = Regional::findOrFail($nis);
        return view('regional.show', compact('regional'));
    }
   public function edit($nis)
    {
        $regional = Regional::findOrFail($nis);
        return view('regional.edit', compact('regional')); 
    }
    public function update(Request $request, $nis)
    {
        $request->validate([
        'codigo' => 'required',
        'denominacion' => 'required',
        'observacion' => 'required'
    ]);
        $regional = Regional::findOrFail($nis);
        $regional->update($request->all()); 
        return redirect()->route('regional.index')
         ->with('success', 'Registro creado correctamente');   
    }
    public function destroy($nis)
    {
        Regional::destroy($nis);
        return redirect()->route('regional.index'); 
    }
}
