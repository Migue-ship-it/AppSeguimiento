<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Programa_formacion;
use Illuminate\Http\Request;

class ProgramaFormacionController extends Controller
{
    public function index()
    {
        $programa_formacion = Programa_formacion::all();
        return view('programa.index', compact('programa_formacion')); 
    }
    public function create()
    {
        return view('programa.create');
    }
    public function store(Request $request)
    {
        $request->validate([
        'codigo' => 'required',
        'denominacion' => 'required',
        'observacion' => 'nullable'
    ]);
    try {
        Programa_formacion::create($request->all());
        return redirect()->route('programa.index')->with('success', 'Creado');
    } catch (\Exception $th) {
         return back()->with('error', 'Creado');
    }
    }
   public function show($nis)
    {
        $programa_formacion = Programa_formacion::findOrFail($nis);
        return view('programa.show', compact('programa_formacion'));
    }
   public function edit($nis)
    {
        $programa_formacion = Programa_formacion::findOrFail($nis);
        return view('programa.edit', compact('programa_formacion')); 
    }
    public function update(Request $request, $nis)
    {
        $request->validate([
        'codigo' => 'required',
        'denominacion' => 'required',
        'observacion' => 'nullable'
    ]);
        $programa_formacion = Programa_formacion::findOrFail($nis);
        $programa_formacion->update($request->all());  
        return redirect()->route('programa.index')
         ->with('success', 'Registro creado correctamente');  
    }
    public function destroy($nis)
    {
        try {
        Programa_formacion::destroy($nis);
        return redirect()->route('programa.index')->with('danger', 'Registro eliminado correctamente'); 
        } catch (\Exception $th) {
           return back()->with('error', 'registro eliminado');
        }
    }
}
