<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlternativasController;
use App\Http\Controllers\AprendicesController;
use App\Http\Controllers\CentroFormacionController;
use App\Http\Controllers\EntecoformadoresController;
use App\Http\Controllers\EpsController;
use App\Http\Controllers\FichaCaracterizacionController;
use App\Http\Controllers\InstructoresController;
use App\Http\Controllers\ProgramaFormacionController;
use App\Http\Controllers\RegionalController;
use App\Http\Controllers\RolesacademicosController;
use App\Http\Controllers\SubtiposAlternativaController;
use App\Http\Controllers\TiposDocumentoController;
Route::get('/', function () {
    return redirect()->route('alternativas.index');
});
Route::resource('alternativas', AlternativasController::class);
Route::resource('aprendices', AprendicesController::class);
Route::resource('centro_formacion', CentroFormacionController::class);
Route::resource('ente_conformadores', EntecoformadoresController::class);
Route::resource('eps', EpsController::class);
Route::resource('ficha_caracterizacion', FichaCaracterizacionController::class);
Route::resource('instructores', InstructoresController::class);
Route::resource('programa_formacion', ProgramaFormacionController::class);
Route::resource('regional', RegionalController::class);
Route::resource('roles', RolesacademicosController::class);
Route::resource('subtipos_alt', SubtiposAlternativaController::class);
Route::resource('tipos_doc', TiposDocumentoController::class);

