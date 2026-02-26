<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Tipos_documento;
use Illuminate\Http\Request;

class TiposDocumentoController extends Controller
{
    public function index()
    {
        $tipos = Tipos_documento::all();
        return view('tipos_doc.index', compact('tipos'));  
    }
    public function create()
    {
        return view('tipos_doc.create');
    }
    public function store(Request $request)
    {
    $request->validate([
        'denominacion' => 'required',
        'observacion' => 'nullable'
    ]);

       try {
       Tipos_documento::create($request->all());
        return redirect()->route('tipos_doc.index')->with('success', 'Creado');
       } catch (\Exception $e) {
         return back()->with('error', 'Creado');
       }
    }

    public function show($nis)
    {
        $tipos = Tipos_documento::findOrFail($nis);
        return view('tipos_doc.show', compact('tipos'));
    }

   public function edit($nis)
    {
        $tipos = Tipos_documento::findOrFail($nis);
        return view('tipos_doc.edit', compact('tipos')); 
    }
    public function update(Request $request, $nis)
    {
         $request->validate([
        'denominacion' => 'required',
        'observacion' => 'nullable'
    ]);
        $tipos = Tipos_documento::findOrFail($nis);
        $tipos->denominacion = $request->denominacion;
        $tipos->observacion = $request->observacion;
        $tipos->save();
        return redirect()->route('tipos_doc.index')->with('success', 'registro actualizado');
    }
    public function destroy($nis)
    {
        try {
       $tipo = Tipos_documento::destroy($nis);
        return redirect()->route('tipos_doc.index')->with('danger', 'registro eliminado');
       } catch (\Exception $e) {
         return back()->with('error', 'registro eliminado');
    }
}
}
