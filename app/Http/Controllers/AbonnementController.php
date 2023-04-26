<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etablissement;
use App\Models\TypeEtablissement;

class AbonnementController extends Controller
{

    public function urbain_scolaire()
    {
         $type_etablissement = TypeEtablissement::all();
        // $etablissements =  Etablissement::all();
        $data = [
            'title' => 'Abonnements urbain scolaire',
            // 'etablissements' => $etablissements,
             'type_etablissement' => $type_etablissement
        ];

        return view('urbain_scolaire', $data);
    }
    public function urbain_ordinaire()
    {
        $etablissements =  Etablissement::all();
        $data = [
            'title' => 'Abonnements urbain ordinaire',
            'etablissements' => $etablissements
        ];
        return view('urbain_ordinaire', $data);
    }
    public function regional_ordinaire()
    {
        $data = [
            'title' => 'Abonnements regional ordinaire'
        ];
        return view('regional_ordinaire', $data);
    }
    public function regional_scolaire()
    {
        $data = [
            'title' => 'Abonnements regional scolaire'
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
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
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
