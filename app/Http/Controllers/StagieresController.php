<?php

namespace App\Http\Controllers;

use App\Models\Stagiere;
use Illuminate\Http\Request;

class StagieresController extends Controller
{
    public function index()

    {
        $data = [
            'title' => 'LYCEE_STAGIERE'
        ];
        $stagieres =  Stagiere::all();
        return view('admin.stagiere.index', $data)->with('stagieres', $stagieres);
    }
    //-----create-----------------------------------////
    public function create()
    {
        return view('admin.stagiere.create');
    }
    //-----create-----------------------------------////
    public function store(Request $request)
    {
        $input = $request->all();
        Stagiere::create($input);
        return redirect('admin/stagiere')->with('success', 'Lycee-Stagieres ajouté !');
    }
}
