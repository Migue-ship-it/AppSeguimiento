<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Aprendices;
use Illuminate\Http\Request;

class AprendicesController extends Controller
{
    public function index()
    {
        $aprendices = Aprendices::all();
        return view('aprendices.index', compact('aprendices'));
    }
    public function create()
    {
        return view('aprendices.create');
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
        Aprendices::create($request->all());
        return redirect()->route('aprendices.index')->with('success', 'Creado');
    } catch (\Exception $th) {
        return back()->with('error', 'Creado');
        }
    }
    public function show($nis)
    {
        $aprendices = Aprendices::findOrFail($nis);
        return view('aprendices.show', compact('aprendices'));
    }
    public function edit($nis)
    {
        $aprendices = Aprendices::findOrFail($nis);
        return view('aprendices.edit', compact('aprendices'));
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
        $aprendices = Aprendices::findOrFail($nis);
        $aprendices->update($request->all()); 
   }
    public function destroy($nis)
    {
        Aprendices::destroy($nis);
        return redirect()->route('aprendices.index');
    }
}
