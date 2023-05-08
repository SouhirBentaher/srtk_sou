<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Etablissement;
use App\Models\Ligne;
use App\Models\TypeEtablissement;

class AbonnementController extends Controller
{

    public function abonnement()
    {
        $data = [
            'title' => 'Abonnements'
        ];
        return view('abonnement', $data);
    }
    public function urbain_scolaire()
    {
        $lignes = Ligne::all();
        $type_etablissements = TypeEtablissement::all();

        //  $etablissements =  Etablissement::all();
        $data = [
            'title' => 'Abonnements urbain scolaire',
            //'etablissements' => $etablissements,
            'type_etablissements' => $type_etablissements,
            'lignes' => $lignes,


        ];

        return view('urbain_scolaire', $data);
    }

    public function urbain_ordinaire()
    {
        $lignes = Ligne::all();
        $type_etablissements = TypeEtablissement::all();

        //  $etablissements =  Etablissement::all();
        $data = [
            'title' => 'Abonnements urbain scolaire',
            //'etablissements' => $etablissements,
            'type_etablissements' => $type_etablissements,
            'lignes' => $lignes,
        ];
        return view('urbain_ordinaire', $data);
    }
    public function regional_ordinaire()
    {
        $lignes = Ligne::all();
        $type_etablissements = TypeEtablissement::all();

        //  $etablissements =  Etablissement::all();
        $data = [
            'title' => 'Abonnements urbain scolaire',
            //'etablissements' => $etablissements,
            'type_etablissements' => $type_etablissements,
            'lignes' => $lignes,


        ];
        return view('regional_ordinaire', $data);
    }
    public function regional_scolaire()
    {
        $lignes = Ligne::all();
        $type_etablissements = TypeEtablissement::all();

        //  $etablissements =  Etablissement::all();
        $data = [
            'title' => 'Abonnements urbain scolaire',
            //'etablissements' => $etablissements,
            'type_etablissements' => $type_etablissements,
            'lignes' => $lignes,


        ];
        return view('regional_scolaire', $data);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
  

     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
