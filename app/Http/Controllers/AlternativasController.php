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
        $palabrasPermitidas = [
            'Contrato de Aprendizaje',
            'Pasantia',
            'Proyecto Productivo',
            'Creación de una unidad productiva',
            'Servicio Militar',
            'Vinculacion laboral'
        ];
        $request->validate([
            'nombre' => ['required','string','max:255', function ($attribute, $value, $fail) use ($palabrasPermitidas) {
                    $esValido = collect($palabrasPermitidas)
                        ->map(fn($p) => strtolower($p))
                        ->contains(strtolower($value));
                    if (!$esValido) {
                        $fail("La descripción no es válida. Solo se permiten: " . implode(', ', $palabrasPermitidas));
                    }
                },
            ],
            'descripcion' => 'required|string|max:255' ,
            'estado' => 'required|in:activo,inactivo'
        ]);

        try {
            Alternativas::create($request->only('nombre','descripcion','estado'));

            return redirect()->route('alternativas.index')
                             ->with('success', 'Registro creado correctamente');

        } catch (\Exception $e) {
                        dd($e->getMessage());

            \Log::error('Error al crear Alternativa: ' . $e->getMessage());
            return back()->with('error', 'Ocurrió un error al crear el registro');
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
        $palabrasPermitidas = [
            'Contrato de Aprendizaje',
            'Pasantia',
            'Proyecto Productivo',
            'Creación de una unidad productiva',
            'Servicio Militar',
            'Vinculacion laboral'
        ];
        $request->validate([
            'nombre' => [
                'required',
                'string',
                'max:255',
                function ($attribute, $value, $fail) use ($palabrasPermitidas) {
                    $esValido = collect($palabrasPermitidas)
                        ->map(fn($p) => strtolower($p))
                        ->contains(strtolower($value));
                    if (!$esValido) {
                        $fail("La descripción no es válida. Solo se permiten: " . implode(', ', $palabrasPermitidas));
                    }
                },
            ],
            'descripcion' => 'required|string|max:255',
            'estado' => 'required|in:activo,inactivo'
        ]);
        try {
            $alternativa = Alternativas::findOrFail($id_alternativa);
            $alternativa->update($request->only('nombre','descripcion','estado'));

            return redirect()->route('alternativas.index')
                             ->with('success', 'Registro actualizado correctamente');
        } catch (\Exception $e) {
            \Log::error('Error al actualizar Alternativa: ' . $e->getMessage());
            return back()->with('error', 'Ocurrió un error al actualizar el registro');
        }
    }
    public function destroy($id_alternativa)
    {
        try {
            Alternativas::destroy($id_alternativa);
            return redirect()->route('alternativas.index')
                             ->with('danger', 'Registro eliminado correctamente');
        } catch (\Exception $e) {
            \Log::error('Error al eliminar Alternativa: ' . $e->getMessage());
            return back()->with('error', 'Ocurrió un error al eliminar el registro');
        }
    }
}
