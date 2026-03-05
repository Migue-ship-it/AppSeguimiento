<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Centro_formacion;
use Illuminate\Http\Request;

class CentroFormacionController extends Controller
{
    public function index()
    {
        $centroformacion = Centro_formacion::all();
        return view('centro_formacion.index', compact('centroformacion'));
    }
    public function create()
    {
        return view('centro_formacion.create');
    }
    public function store(Request $request)
    {
        $request->validate([
        'codigo' => 'required',
        'denominacion' => 'required',
        'direccion' => 'required'
    ]);
    try {
        Centro_formacion::create($request->all());
        return redirect()->route('centro_formacion.index')->with('success', 'Creado');
    } catch (\Exception $th) {
         return back()->with('error', 'Creado');
    }
    }
    public function show($nis)
    {
        $centroformacion = Centro_formacion::findOrFail($nis);
        return view('centro_formacion.show', compact('centroformacion'));
    }
    public function edit($nis)
    {
        $centroformacion = Centro_formacion::findOrFail($nis);
        return view('centro_formacion.edit', compact('centroformacion')); 
   }
    public function update(Request $request, $nis)
    {
        $request->validate([
        'codigo' => 'required',
        'denominacion' => 'required',
        'direccion' => 'required'
    ]);
        $centroformacion = Centro_formacion::findOrFail($nis);
        return redirect()->route('centro_formacion.index')
        ->with('success', 'Registro creado correctamente');
    }
    public function destroy($nis)
    {
        try {
        Centro_formacion::destroy($nis);
        return redirect()->route('centro_formacion.index')->with('danger', 'Registro eliminado correctamente');
        } catch (\Exception $th) {
            return back()->with('error', 'registro eliminado');
        }
    }
}
