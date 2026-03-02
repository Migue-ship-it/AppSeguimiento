<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Ficha_caracterizacion;
use Illuminate\Http\Request;

class FichaCaracterizacionController extends Controller
{
    public function index()
    {
        $ficha = Ficha_caracterizacion::all();
        return view('ficha_caracterizacion.index', compact('ficha'));
    }
    public function create()
    {
        return view('ficha_caracterizacion.create');
    }
    public function store(Request $request)
    {
        $request->validate([
        'codigo' => 'required',
        'cupo' => 'required',
        'fecha_Inicio' => 'required',
        'fecha_Fin' => 'required'
    ]);
    try {Ficha_caracterizacion::create($request->all());
        return redirect()->route('ficha_caracterizacion.index')->with('success', 'Creado');
    } catch (\Exception $th) {
         return back()->with('error', 'Creado');
    }
        
    }
    public function show($nis)
    {
        $ficha = Ficha_caracterizacion::findOrFail($nis);
        return view('ficha_caracterizacion.show', compact('ficha'));
    }
   public function edit($nis)
    {
        $ficha = Ficha_caracterizacion::findOrFail($nis);
        return view('ficha_caracterizacion.edit', compact('ficha')); 
    }
    public function update(Request $request, $nis)
    {
        $request->validate([
        'codigo' => 'required',
        'cupo' => 'required',
        'fecha_Inicio' => 'required',
        'fecha_Fin' => 'required',
    ]);
        $ficha = Ficha_caracterizacion::findOrFail($nis);
        $ficha->update($request->all()); 
        return redirect()->route('ficha_caracterizacion.index')
         ->with('success', 'Registro creado correctamente');   
    }
    public function destroy($nis)
    {
        Ficha_caracterizacion::destroy($nis);
        return redirect()->route('ficha_caracterizacion.index'); 
    }
}
