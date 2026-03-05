<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Entecoformadores;
use Illuminate\Http\Request;

class EntecoformadoresController extends Controller
{
    public function index()
    {
        $ente = Entecoformadores::all();
        return view('ente_conformadores.index', compact('ente'));
    }
    public function create()
    {
        return view('ente_conformadores.create');
    }
    public function store(Request $request)
    {
       $request->validate([
        'Tdoc' => 'required',
        'Ndoc' => 'required',
        'razonsocial' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'correoinstitucional' => 'required',
        'fechaNac' => 'required'
    ]);
    try {
        Entecoformadores::create($request->all());
        return redirect()->route('ente_conformadores.index')->with('success', 'Creado');
    } catch (\Exception $th) {
         return back()->with('error', 'Creado');
    }
    }
    public function show($nis)
    {
        $ente = Entecoformadores::findOrFail($nis);
        return view('ente_conformadores.show', compact('ente'));
    }
    public function edit($nis)
    {
        $ente = Entecoformadores::findOrFail($nis);
        return view('ente_conformadores.edit', compact('ente'));
    }
    public function update(Request $request, $nis)
    {
        $request->validate([
        'Tdoc' => 'required',
        'Ndoc' => 'required',
        'razonsocial' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'correoinstitucional' => 'required',
        'fechaNac' => 'required',
    ]);
        $ente = Entecoformadores::findOrFail($nis);
        $ente->update($request->all());    
         return redirect()->route('ente_conformadores.index')
         ->with('success', 'Registro creado correctamente');
    }
    public function destroy($nis)
    {
        try {
        Entecoformadores::destroy($nis);
        return redirect()->route('ente_conformadores.index')->with('danger', 'Registro eliminado correctamente'); 
        } catch (\Exception $th) {
            return back()->with('error', 'registro eliminado');
        }
    }
    }
