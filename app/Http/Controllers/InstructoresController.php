<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Instructores;
use Illuminate\Http\Request;
use App\Notifications\AsignacionInstructorNotification;

class InstructoresController extends Controller{

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
        'fechaNac' => 'required',
        'tbltipos_documento_nis' => 'required',
        'tbleps_nis' => 'required',
        'tblrolesacademicos_nis' => 'required'
        ]);
        try {
            $instructor = Instructores::create($request->all());
            $instructor->notify(new AsignacionInstructorNotification($descripcion));
            return redirect()->route('instructores.index')
            ->with('success', 'Creado');
            } catch (\Exception $th) {
                dd($th->getMessage());
             //return back()->with('error', 'Error al crear registro');
             }
             }
    public function show($nis)
    {
        $instructores = Instructores::findOrFail($nis);
        return view('instructores.show', compact('instructores'));
        }

    public function edit($nis)
        {
            $instructores = Instructores::findOrFail($nis);
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
             'tbltipos_documento_nis' => 'required',
             'tbleps_nis' => 'required',  
             'tblrolesacademicos_nis' => 'required'
             ]);

             $instructores = Instructores::findOrFail($nis);
             $instructores->update($request->all());
              return redirect()->route('instructores.index')
              ->with('success', 'Registro actualizado correctamente');
              }
              
    public function destroy($nis)
    {
        try {
            Instructores::destroy($nis);
            return redirect()->route('instructores.index')
            ->with('danger', 'Registro eliminado correctamente');
        } catch (\Exception $th) {
            return back()->with('error', 'Error al eliminar registro');
            }
    }}