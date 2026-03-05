<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Rolesacademicos;
use Illuminate\Http\Request;

class RolesacademicosController extends Controller
{
    public function index()
    {
        $roles = Rolesacademicos::all();
        return view('roles.index', compact('roles')); 
    }
    public function create()
    {
        return view('roles.create');
    }
    public function store(Request $request)
    {
        $request->validate([
        'descripcion' => 'required'
    ]);
    try {
        Rolesacademicos::create($request->all());
        return redirect()->route('roles.index')->with('success', 'Creado');
    } catch (\Exception $th) {
         return back()->with('error', 'Creado');
    }
    }
    public function show($nis)
    {
        $roles = Rolesacademicos::findOrFail($nis);
        return view('roles.show', compact('roles'));
    }
   public function edit($nis)
    {
        $roles = Rolesacademicos::findOrFail($nis);
        return view('roles.edit', compact('roles')); 
    }
    public function update(Request $request, $nis)
    {
         $request->validate([
        'descripcion' => 'required',
    ]);
        $roles = Rolesacademicos::findOrFail($nis);
        $roles->update($request->all());    
         return redirect()->route('roles.index')
         ->with('success', 'Registro creado correctamente');
    }
    public function destroy($nis)
    {
        try {
        Rolesacademicos::destroy($nis);
        return redirect()->route('roles.index')->with('danger', 'Registro eliminado correctamente'); 
        } catch (\Exception $th) {
           return back()->with('error', 'registro eliminado');
        }
    }
}
