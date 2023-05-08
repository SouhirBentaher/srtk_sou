<?php

namespace App\Http\Controllers;

use App\Models\Abonne;
use Illuminate\Http\Request;

class AbonneController extends Controller
{
    //     /**
    //      * Display a listing of the resource.
    //      */
    //     public function index()
    //     {
    //         $abonne = Abonne::all();
    //         return response()->json($abonne);
    //     }

    //     //-----create-----------------------------------////



    //     /**
    //      * Display the specified resource.
    //      */
    //     public function show(string $id)
    //     {
    //         //
    //     }

    //     /**
    //      * Show the form for editing the specified resource.
    //      */
    //     public function edit(string $id)
    //     {
    //         //
    //     }

    //     /**
    //      * Update the specified resource in storage.
    //      */
    //     public function update(Request $request, string $id)
    //     {
    //         $abonne = Abonne::find($id);
    //         $abonne->nom = $request->nom ?? $abonne->nom;
    //         $abonne->prenom = $request->prenom ?? $abonne->prenom;
    //         $abonne->date_naissance = $request->date_naissance ?? $abonne->date_naissance;
    //         $abonne->adresse = $request->adresse ?? $abonne->adresse;
    //         $abonne->num_telephone = $request->num_telephone ?? $abonne->num_telephone;
    //         $abonne->classe = $request->classe ?? $abonne->classe;
    //         $abonne->photo = $request->photo ?? $abonne->photo;
    //         $abonne->email = $request->email ?? $abonne->email;
    //         $abonne->cin = $request->cin ?? $abonne->cin;
    //         $abonne->date_emission = $request->date_emission ?? $abonne->date_emission;
    //         $abonne->nom_parent = $request->nom_parent ?? $abonne->nom_parent;
    //         $abonne->prenom_parent = $request->prenom_parent ?? $abonne->prenom_parent;
    //         $abonne->cin_parent = $request->cin_parent ?? $abonne->cin_parent;
    //         $abonne->etablissement_id = $request->tablissement_id ?? $abonne->tablissement_id;
    //         $abonne->type_abonnes_id = $request->type_abonnes_id ?? $abonne->type_abonnes_id;

    //         $abonne->save();
    //         return $abonne;
    //     }

    //     /**
    //      * Remove the specified resource from storage.
    //      */
    //     public function destroy(string $id)
    //     {
    //         $abonne = Abonne::find($id);
    //         $abonne->delete();

    //         return response()->json([
    //             'status' => 200,
    //             'message' => 'abonné supprimé successfully'

    //         ]);
    //     }
}
