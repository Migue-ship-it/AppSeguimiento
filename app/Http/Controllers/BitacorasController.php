<?php

namespace App\Http\Controllers;

use App\Models\Bitacoras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BitacorasController extends Controller
{
    public function index()
    {
    $bitacora = Bitacoras::with('user')->where ('id_login', Auth::id())->get();
    return view('bitacoras.index', compact('bitacora'));
    }
    public function create()
    {
       return view('bitacoras.create');
    }
    public function store(Request $request)
{
    $request->validate([
        'file' => 'required|file|mimes:pdf|max:2048'
    ]);
    $nombreArchivo = 'bit_' . Auth::id(). '_' . time() . '.pdf';
    $request->file('file')->move(public_path('/uploads/bitacora/'), $nombreArchivo);

    Bitacoras::create([
        'id_login' => Auth::id(),
        'file' => '/uploads/bitacora/'.$nombreArchivo
    ]);

    return redirect()->route('bitacoras.index')->with('success', 'PDF registrado correctamente');
}
    public function show(Bitacoras $bitacora)
    {
        if ($bitacora ->id_login!== Auth::id());{
        }
        return view('bitacoras.show', compact('bitacora'));
    }
    public function edit(Bitacoras $bitacora)
    {
        if ($bitacora ->id_login!== Auth::id());{
            //dd($bitacora); revision de variables  
        }        
        return view('bitacoras.edit', compact('bitacora'));
    }
    public function update(Request $request, Bitacoras $bitacora)
    {
    if ($bitacora ->id_login!== Auth::id());{
            //abort(403);//mensaje de error de existencia de id para la muestra de bitacora
        }
         $request->validate([
        'file' => 'nullable|file|mimes:pdf|max:2048'
    ]);       
    if(file::exists(public_path($bitacora->file))) { //reemplazar pdf anterior con cambios registrados
        file::delete(public_path($bitacora->file));
    }
        $nombreArchivo = 'bit_' . Auth::id(). '_' . time() . '.pdf';

        $request->file('file')->move(
        public_path('/uploads/bitacora/'), $nombreArchivo);

        $bitacora->update([
        'file' => '/uploads/bitacora/', $nombreArchivo]);    
         return redirect()->route('bitacoras.index')
         ->with('success', 'Registro creado correctamente');
    }
    public function destroy(Bitacoras $bitacora)
    {
    if ($bitacora->id_login !== Auth::id()) {
        abort(403);
    }
    if ((!empty($bitacora->file))) {
        $ruta = public_path($bitacora->file);
        if (file_exists($ruta) && is_file($ruta)) {
            unlink($ruta);
        }
    }
    $bitacora->delete();
    return redirect()->route('bitacoras.index')->with('danger', 'Registro eliminado correctamente'); 
    }
}