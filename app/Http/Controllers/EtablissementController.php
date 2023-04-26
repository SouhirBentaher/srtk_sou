<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etablissement;
use App\Models\TypeEtablissement;

class EtablissementController extends Controller
{
    public function index()

    {
        $data = [
            'title' => 'Etablissement'
        ];
        $etablissements =  Etablissement::all();
        return view('admin.etablissement.index', $data)->with('etablissements', $etablissements);
    }
    public function etab(Request $request)
    {
        if ($request->ajax()) {
            $type_etablissement_id = $request->type_etablissement_id;
            $etablissements = Etablissement::where('type_etablissement_id', '=', $type_etablissement_id)->get();
            return response()->json([
                'success' => true,
                "etablissements" => $etablissements
            ]);
        } else {
            $etablissements = Etablissement::all();
            $type_etablissement = TypeEtablissement::all();
            return view('abonnements_tab', compact('etablissements,type_etablissement'));
        }
    }
}
