<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Instructores;
use Illuminate\Http\Request;

class InstructoresController extends Controller
{
    public function index()
    {
        $instructores = Instructores::all();
        return view('instructores.index', compact('instructores'));
    }
    public function create()
    {
        return view('instructores.create');
    }
    public function store(Request $request)
    {
        $request->validate([
        'Tdoc' => 'required',
        'Ndoc' => 'required',
        'nombres' => 'required',
        'apellidos' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'correoinstitucional' => 'required',
        'correopersonal' => 'required',
        'sexo' => 'required',
        'fechaNac' => 'required'
    ]);
    try {
        Instructores::create($request->all());
        return redirect()->route('instructores.index')->with('success', 'Creado');
    } catch (\Exception $th) {
         return back()->with('error', 'Creado');
    }
    }
   public function show($nis)
    {
        $instructores = Eps::findOrFail($nis);
        return view('instructores.show', compact('instructores'));
    }
   public function edit($nis)
    {
        $instructores = Eps::findOrFail($nis);
        return view('instructores.edit', compact('instructores')); 
    }
    public function update(Request $request, $nis)
    {
        $request->validate([
        'Tdoc' => 'required',
        'Ndoc' => 'required',
        'nombres' => 'required',
        'apellidos' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'correoinstitucional' => 'required',
        'correopersonal' => 'required',
        'sexo' => 'required',
        'fechaNac' => 'required',
    ]);
        $instructores = Eps::findOrFail($nis);
        $instructores->update($request->all());    
    }
    public function destroy($nis)
    {
        Instructores::destroy($nis);
        return redirect()->route('instructores.index'); 
    }
}
