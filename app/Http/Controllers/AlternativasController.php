<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Alternativas;
use Illuminate\Http\Request;

class AlternativasController extends Controller
{
    public function index()
    {
        $alternativa = Alternativas::all();
        return view('alternativas.index', compact('alternativa'));
    }
    public function create()
    {
        return view('alternativas.create');
    }
    public function store(Request $request)
    {
    $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
        'estado' => 'required'
        ]);
        try {
        Alternativas::create($request->all());
        return redirect()->route('alternativas.index') ->with('success', 'Registro creado correctamente');
       } catch (\Exception $e) {
         return back()->with('error', 'Creado');
       }
    }
    public function show($id_alternativa)
    {
        $alternativa = Alternativas::findOrFail($id_alternativa);
        return view('alternativas.show', compact('alternativa'));
        }
    public function edit($id_alternativa)
    {
        $alternativa = Alternativas::findOrFail($id_alternativa);
        return view('alternativas.edit', compact('alternativa'));
    }
    public function update(Request $request, $id_alternativa)
    {
        $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
        'estado' => 'required'
    ]);
        $alternativa = Alternativas::findOrFail($id_alternativa);
        $alternativa->update($request->all());
         return redirect()->route('alternativas.index')
         ->with('success', 'Registro creado correctamente');
    }
    public function destroy($id_alternativa)
    {
        Alternativas::destroy($id_alternativa);
        return redirect()->route('alternativas.index');
    }
}
