<?php

use App\Http\Controllers\AbonneController;
use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DemandeAbonnementController;
use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\FaculteController;
use App\Http\Controllers\LigneController;
use App\Http\Controllers\LyceeController;
use App\Http\Controllers\StagieresController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\TypeEtablissementController;
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
/////-----------demendeAbonnement------------/////
Route::post('/demande_abonnements', [DemandeAbonnementController::class, 'store'])->name('demande_abonnements.store');
Route::get('/demande_abonnements/{id}/generate-pdf', [DemandeAbonnementController::class, 'generatePdf'])->name('demande_abonnements.generate-pdf');
Route::get('/admin/abonnement', [DemandeAbonnementController::class, 'index'])->name('abonnements.index');
Route::delete('admin/abonnement/{id}', [DemandeAbonnementController::class, 'destroy']);

////
Route::get('/abonnement', [AbonnementController::class, 'abonnement'])->name('abonnement');
////
///
Route::get('/getEtabByid', [EtablissementController::class, 'etab'])->name('getEtabByid');
///
//RouteAdmin

Route::get('/admin/login', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('/admin/login', [AuthController::class, 'postLogin'])->name('postLogin');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
    ///////---------route--users-------/////
    Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create']);
    Route::post('admin/users', [UserController::class, 'store']);
    Route::delete('admin/users/{id}', [UserController::class, 'destroy']);
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
    Route::delete('admin/ligne/{id}', [LigneController::class, 'destroy']);

    //////-----route--etblissement-------/////
    //Route::get('/admin/etablissement', [EtablissementController::class, 'index'])->name('etablissements.index');

    //////-----route--station-------/////
    Route::get('/admin/station', [StationController::class, 'index'])->name('stations.index');
    Route::get('/station/create', [StationController::class, 'create']);
    Route::post('admin/station', [StationController::class, 'store']);

    //////-----route--type_etablissements-------/////
    Route::get('/admin/lycee', [TypeEtablissementController::class, 'index'])->name('lycees.index');
    Route::get('/lycee/create', [TypeEtablissementController::class, 'create']);
    Route::post('admin/lycee', [TypeEtablissementController::class, 'store']);
    Route::delete('admin/lycee/{id}', [TypeEtablissementController::class, 'destroy']);
    //////-----route--etablissement-------/////
    Route::get('/admin/faculte', [EtablissementController::class, 'afficher'])->name('facultes.index');
    Route::get('/faculte/create', [EtablissementController::class, 'create']);
    Route::post('admin/faculte', [EtablissementController::class, 'store']);
    Route::delete('admin/faculte/{id}', [EtablissementController::class, 'destroy']);
    //////-----route--categorie-------/////
    Route::get('/admin/stagiere', [CategorieController::class, 'index'])->name('stagieres.index');
    Route::get('/stagiere/create', [CategorieController::class, 'create']);
    Route::post('admin/stagiere', [CategorieController::class, 'store']);
    Route::delete('admin/stagiere/{id}', [CategorieController::class, 'destroy']);

    Route::get('/admin/logout', [ProfileController::class, 'logout'])->name('logout');
});
