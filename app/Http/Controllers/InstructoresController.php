<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Instructores;
use App\Models\Tipos_documento;
use App\Models\Eps;
use App\Models\Rolesacademicos;
use Illuminate\Http\Request;
use App\Notifications\AsignacionInstructorNotification;
use Illuminate\Support\Facades\DB;

class InstructoresController extends Controller{

    public function index()
    {
    $instructores = Instructores::with('tipos_documento', 'eps', 'rolesacademicos')->get();
    return view('instructores.index', compact('instructores'));
    }

    public function create()
    {
    $tipos_documento = Tipos_documento::where('nis', '!=', 5)->get();
    $eps = Eps::all();
    $rolesacademicos = Rolesacademicos::all();
    return view('instructores.create', compact('tipos_documento', 'eps', 'rolesacademicos'));
    }

    public function store(Request $request)
    {
    $request->validate([
        'tbltipos_documento_nis' => 'required|exists: tbltipos_documento, nis',
        'tbleps_nis' => 'required|exists: tbleps, nis',
        'tblrolesacademicos_nis' => 'required|exists: tblrolesacademicos, nis',
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
           DB::beginTransaction();

        try {
            $tipos_documento = Tipos_documento::find($request->tbltipos_documento_nis);
            $request->merge([
                'Tdoc' => $tipos_documento->denominacion
            ]);
            $instructor = Instructores::create($request->all());

            /*$seleccion_descripcion = Alternativas::find(1);
            if ($seleccion_descripcion->descripcion) {
            $descripcion = $seleccion_descripcion->descripcion;
            }
            else{
            $descripcion = "hola";
            }*/
            DB::commit();
          $instructor->notify(new AsignacionInstructorNotification($instructor));
          dd($instructor->correoinstitucional);
            return redirect()->route('instructores.index')
            ->with('success', 'Creado');
            } catch (\Exception $th) {
                DB::rollBack();
                return dd($th->getmessage());
             //return back()->with('error', 'Error al crear registro');
            }
    }
    public function show($nis)
    {
        $instructores = Instructores::with('tipos_documento', 'eps', 'rolesacademicos')->findOrFail($nis);
        return view('instructores.show', compact('instructores'));
        }

    public function edit($nis)
        {
            $instructores = Instructores::findOrFail($nis);
            $tipos_documento = Tipos_documento::all();
            $eps = Eps::all();
            $rolesacademicos = Rolesacademicos::all();
            return view('instructores.edit', compact('instructores', 'tipos_documento', 'eps', 'rolesacademicos'));
        }
    public function update(Request $request, $nis)
    {
        $request->validate([
            'tbltipos_documento_nis' => 'required|exists: tbltipos_documento, nis',
            'tbleps_nis' => 'required|exists: tbleps, nis',
            'tblrolesacademicos_nis' => 'required|exists: tblrolesacademicos, nis',
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