<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Subtipos_alternativa;
use Illuminate\Http\Request;

class SubtiposAlternativaController extends Controller
{
    public function index()
    {
        $subtipos = Subtipos_alternativa::all();
        return view('subtipos_alt.index', compact('subtipos'));  
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
        $subtipos = Subtipos_alternativa::findOrFail($id_subtipo);
        return view('subtipos_alt.show', compact('subtipos'));
    }
   public function edit($id)
    {
        $subtipos = Subtipos_alternativa::findOrFail($id_subtipo);
        return view('subtipos_alt.edit', compact('subtipos')); 
    }
    public function update(Request $request, $id_subtipo)
    {
         $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
        'estado' => 'required'
    ]);
        $subtipos = Subtipos_alternativa::findOrFail($id_subtipo);
        $subtipos->update($request->all());    
    }
    public function destroy($id_subtipo)
    {
        Subtipos_alternativa::destroy($id_subtipo);
        return redirect()->route('subtipos_alt.index'); 
    }
}
