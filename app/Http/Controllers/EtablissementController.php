<?php

namespace App\Http\Controllers;

use App\Models\Etablissement;
use Illuminate\Http\Request;

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
}
