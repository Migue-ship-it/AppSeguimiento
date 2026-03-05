<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Eps;
use Illuminate\Http\Request;

class EpsController extends Controller
{
    public function index()
    {
        $eps = Eps::all();
        return view('eps.index', compact('eps'));
    }
    public function create()
    {
        return view('eps.create');
    }
    public function store(Request $request)
    {
        $request->validate([
        'Numdoc' => 'required',
        'denominacion' => 'required'
    ]);
    try {
        Eps::create($request->all());
        return redirect()->route('eps.index')->with('success', 'Creado');  
    } catch (\Exception $th) {
         return back()->with('error', 'Creado');
th;
    }
    }
    public function show($nis)
    {
        $eps = Eps::findOrFail($nis);
        return view('eps.show', compact('eps'));
    }
   public function edit($nis)
    {
        $eps = Eps::findOrFail($nis);
        return view('eps.edit', compact('eps')); 
    }
    public function update(Request $request, $nis)
    {
        $request->validate([
        'Numdoc' => 'required',
        'denominacion' => 'required',
    ]);
        $eps = Eps::findOrFail($nis);
        $eps->update($request->all()); 
        return redirect()->route('eps.index')->with('success', 'Registro creado correctamente');   
    }
    public function destroy($nis)
    {
        try {
        Eps::destroy($nis);
        return redirect()->route('eps.index')->with('danger', 'Registro eliminado correctamente'); 
        } catch (\Exception $th) {
            return back()->with('error', 'registro eliminado');
        }
    }
}
