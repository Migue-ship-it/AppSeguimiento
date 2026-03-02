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
use App\Http\Controllers\BitacorasController;
use App\Http\Controllers\AuthController;
Route::resource('alternativa', AlternativasController::class);
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
Route::resource('bitacoras', BitacorasController::class);
Route::get('/register', [AuthController::class, 'showLogin'])->name('login');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->middleware('guest')->name('login'); //usuario registrado
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

