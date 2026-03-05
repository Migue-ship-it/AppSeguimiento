<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Subtipos_alternativa;
use Illuminate\Http\Request;

class SubtiposAlternativaController extends Controller
{
    public function index()
    {
        $subtipo = Subtipos_alternativa::all();
        return view('subtipos_alt.index', compact('subtipo'));  
    }
    public function create()
    {
        return view('subtipos_alt.create');
    }
    public function store(Request $request)
    {
         $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
        'estado' => 'required'
    ]);
    try {
        Subtipos_alternativa::create($request->all());
        return redirect()->route('subtipos_alt.index')->with('success', 'Creado');
    } catch (\Exception $th) {
         return back()->with('error', 'Creado');
    }
    }
    public function show($id)
    {
        $subtipo = Subtipos_alternativa::findOrFail($id_subtipo);
        return view('subtipos_alt.show', compact('subtipo'));
    }
   public function edit($id)
    {
        $subtipo = Subtipos_alternativa::findOrFail($id_subtipo);
        return view('subtipos_alt.edit', compact('subtipo')); 
    }
    public function update(Request $request, $id_subtipo)
    {
         $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
        'estado' => 'required'
    ]);
        $subtipo = Subtipos_alternativa::findOrFail($id_subtipo);
        $subtipo->update($request->all()); 
        return redirect()->route('subtipos_alt.index') ->with('success', 'Registro creado correctamente');   
    }
    public function destroy($id_subtipo)
    {
        try {
        Subtipos_alternativa::destroy($id_subtipo);
        return redirect()->route('subtipos_alt.index')->with('danger', 'Registro eliminado correctamente'); 
        } catch (\Exception $th) {
           return back()->with('error', 'registro eliminado');
        }
    }
}
