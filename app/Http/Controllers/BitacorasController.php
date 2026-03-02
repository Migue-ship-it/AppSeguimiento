<?php

namespace App\Http\Controllers;

use App\Models\Bitacoras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BitacorasController extends Controller
{
    public function index()
    {
    $bitacora = Bitacoras::where('id_login', Auth::id())->get();
    return view('bitacoras.index', compact('bitacora'));
    }
    public function create()
    {
       return view('bitacoras.index');
    }
    public function store(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:pdf'
    ]);

$nombreArchivo = 'bit_' . Auth::user()->documento . '_' . time() . '.pdf';
    $request->file('file')->move(public_path('/uploads/bitacora/'), $nombreArchivo);

    Bitacoras::create([
        'id_login' => Auth::id(),'file' => '/uploads/bitacora/'.$nombreArchivo
    ]);

    return redirect()->route('bitacoras.index')->with('success', 'PDF registrado correctamente');
}
    public function show(Bitacoras $bitacora)
    {
        $bitacora = Bitacoras::where('id_login', Auth::id())->findOrFail($id);
        return view('bitacoras.show', compact('bitacora'));
    }
    public function edit(Bitacoras $bitacora)
    {
        $bitacora = Bitacoras::where('id_login', Auth::id())->findOrFail($id);
        return view('bitacoras.edit', compact('bitacora'));
    }
    public function update(Request $request, Bitacoras $bitacora)
    {
         $request->validate([
        'file' => 'required|mimes:pdf'
    ]);
        $bitacora = Bitacoras::where('id_login', Auth::id())->findOrFail($id);
        $bitacora->update($request->all());    
         return redirect()->route('bitacoras.index')
         ->with('success', 'Registro creado correctamente');
    }
    public function destroy(Bitacoras $bitacora)
    {
    $bitacora = Bitacoras::where('id_login', Auth::id())->findOrFail($id);
    if(file_exists(public_path($bitacora->file))) {
        unlink(public_path($bitacora->file));
    }
    $bitacora->delete();
    return redirect()->route('bitacoras.index')->with('danger', 'Registro eliminado correctamente'); 
    }
}