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
            $is_prive = $request->is_prive;
            $type_etablissement_id = $request->type_etablissement_id;
            $etablissements = Etablissement::where('type_etablissements_id', '=', $type_etablissement_id)
                ->where('is_prive', '=', $is_prive)
                ->get();
            return response()->json([
                'success' => true,
                "etablissements" => $etablissements
            ]);
        }
        // if ($request->ajax()) {
        //     $type_etablissement_id = $request->type_etablissement_id;
        //     $etablissements = Etablissement::where('type_etablissements_id', '=', $type_etablissement_id)->get();
        //     return response()->json([
        //         'success' => true,
        //         "etablissements" => $etablissements
        //     ]);
        // }
    }
    ////////////////////////////////////
    public function afficher()

    {
        $etablissements =  Etablissement::all();
        $data = [
            'title' => 'Etablissement',
        ];
        return view('admin.faculte.index', $data)->with('etablissements', $etablissements);
    }
    //-----create-----------------------------------////
    public function create()
    {
        $type_etablissements = TypeEtablissement::all();
        $data = [

            'type_etablissements' => $type_etablissements,
        ];
        return view('admin.faculte.create', $data)->with('type_etablissements', $type_etablissements);
    }
    //-----store-----------------------------------////
    public function store(Request $request)
    {
        $isPrive = 0;
        if ($request->has('is_prive')) {
            switch ($request->input('is_prive')) {
                case 'Publique':
                    $isPrive = 0;
                    break;
                case 'Privé':
                    $isPrive = 1;
                    break;
                default:
                    // Traiter les valeurs inattendues de $request->input('is_prive') ici
                    break;
            }
        }
        $input = [
            'nom' => $request->input('nom'),
            'type_etablissements_id' => $request->input('type_etablissements_id'),
            'is_prive' => ($isPrive == 'Publique') ? 0 : 1,
        ];


        $etablissement = new Etablissement($input);
        $etablissement->type_etablissements_id = $request->input('type_etablissements_id');
        $etablissement->save();
        return redirect('admin/faculte')->with('success', 'Etablissement ajouté !');
    }
    //-----delete-----------------------------------////
    public function destroy($id)
    {
        Etablissement::destroy($id);
        return redirect('admin/faculte')->with('success', ' Etablissemet deleted !');
    }
}
