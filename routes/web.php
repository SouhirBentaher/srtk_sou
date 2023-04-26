<?php

use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\FaculteController;
use App\Http\Controllers\LigneController;
use App\Http\Controllers\LyceeController;
use App\Http\Controllers\StagieresController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\TarifController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//RouteClient
Route::get('/index', [AcceuilController::class, 'index'])->name('index');
Route::get('/urbain_scolaire', [AbonnementController::class, 'urbain_scolaire'])->name('urbain_scolaire');
Route::get('/urbain_ordinaire', [AbonnementController::class, 'urbain_ordinaire'])->name('urbain_ordinaire');
Route::get('/regional_ordinaire', [AbonnementController::class, 'regional_ordinaire'])->name('regional_ordinaire');
Route::get('/regional_scolaire', [AbonnementController::class, 'regional_scolaire'])->name('regional_scolaire');
Route::get('/urbain_scolaire', [EtablissementController::class, 'etab'])->name('etab');

////


//RouteAdmin

Route::get('/admin/login', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('/admin/login', [AuthController::class, 'postLogin'])->name('postLogin');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
    //////-----route--Tarif-------/////
    Route::get('/admin/tarif', [TarifController::class, 'index'])->name('tarifs.index');
    Route::get('tarif/create', [TarifController::class, 'create']);
    Route::post('admin/tarif', [TarifController::class, 'store']);
    Route::delete('admin/tarif/{id}', [TarifController::class, 'destroy']);
    // Route::get('/admin/{id}/edit', [TarifController::class, 'edit']);
    //Route::patch('/edit', [TarifController::class, 'update']);
    //////-----route--ligne-------/////
    Route::get('/admin/ligne', [LigneController::class, 'index'])->name('lignes.index');
    Route::get('/ligne/create', [LigneController::class, 'create']);
    Route::post('admin/ligne', [LigneController::class, 'store']);
    //////-----route--etblissement-------/////
    Route::get('/admin/etablissement', [EtablissementController::class, 'index'])->name('etablissements.index');
    //Route::get('/regional_scolaire', [EtablissementController::class, 'etablissement'])->name('etablissment');
    //Route::get('/regional_ordinaire', [EtablissementController::class, 'etablissement'])->name('etablissment');
    //Route::get('/urbain_ordinaire', [EtablissementController::class, 'etablissement'])->name('etablissment');
    //////-----route--station-------/////
    Route::get('/admin/station', [StationController::class, 'index'])->name('stations.index');
    Route::get('/station/create', [StationController::class, 'create']);
    Route::post('admin/station', [StationController::class, 'store']);
    //Route::get('/station', [StationController::class, 'store']);

    //////-----route--lycee-------/////
    Route::get('/admin/lycee', [LyceeController::class, 'index'])->name('lycees.index');
    Route::get('/lycee/create', [LyceeController::class, 'create']);
    Route::post('admin/lycee', [LyceeController::class, 'store']);
    Route::delete('admin/lycee/{id}', [LyceeController::class, 'destroy']);
    //////-----route--faculte-------/////
    Route::get('/admin/faculte', [FaculteController::class, 'index'])->name('facultes.index');
    Route::get('/faculte/create', [FaculteController::class, 'create']);
    Route::post('admin/faculte', [FaculteController::class, 'store']);
    Route::delete('admin/faculte/{id}', [FaculteController::class, 'destroy']);
    //////-----route--stagiere-------/////
    Route::get('/admin/stagiere', [StagieresController::class, 'index'])->name('stagieres.index');
    Route::get('/stagiere/create', [StagieresController::class, 'create']);
    Route::post('admin/stagiere', [StagieresController::class, 'store']);

    Route::get('/admin/logout', [ProfileController::class, 'logout'])->name('logout');
});
