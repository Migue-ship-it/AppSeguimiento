<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Programa_formacion;
use Illuminate\Http\Request;

class ProgramaFormacionController extends Controller
{
    public function index()
    {
        $programa = Programa_formacion::all();
        return view('programa_formacion.index', compact('programa')); 
    }
    public function create()
    {
        return view('programa_formacion.create');
    }
    public function store(Request $request)
    {
        $request->validate([
        'codigo' => 'required',
        'denominacion' => 'required',
        'direccion' => 'required'
    ]);
    try {
        Programa_formacion::create($request->all());
        return redirect()->route('programa_formacion.index')->with('success', 'Creado');
    } catch (\Exception $th) {
         return back()->with('error', 'Creado');
    }
    }
   public function show($id)
    {
        $programa = Programa_formacion::findOrFail($nis);
        return view('programa_formacion.show', compact('programa'));
    }
   public function edit($nis)
    {
        $programa = Programa_formacion::findOrFail($nis);
        return view('programa_formacion.edit', compact('programa')); 
    }
    public function update(Request $request, $nis)
    {
        $request->validate([
        'codigo' => 'required',
        'denominacion' => 'required',
        'direccion' => 'required',
    ]);
        $programa = Programa_formacion::findOrFail($nis);
        $programa->update($request->all());    
    }
    public function destroy($nis)
    {
        Programa_formacion::destroy($nis);
        return redirect()->route('programa_formacion.index'); 
    }
}
