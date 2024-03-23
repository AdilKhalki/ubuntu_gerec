<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\EtatController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\PosteController;
use App\Http\Controllers\ReclamationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\TypeReclamationController;
use App\Http\Controllers\VilleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::resource('/regions',RegionController::class);
Route::resource('/villes',VilleController::class);
Route::resource('/etablissements',EtablissementController::class);
Route::resource('/postes',PosteController::class);
Route::resource('/etats',EtatController::class);
Route::resource('/grades',GradeController::class);
Route::resource('/agents',AgentController::class);
Route::resource('/reclamations',ReclamationController::class);
Route::resource('/villes',VilleController::class);
Route::resource('/types_reclamations',TypeReclamationController::class);



