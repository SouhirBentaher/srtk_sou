<?php

namespace App\Http\Controllers;

use App\Models\TypeEtablissement;
use Illuminate\Http\Request;

class TypeEtablissementController extends Controller
{
    public function index()

    {
        $data = [
            'title' => 'type_etablissemets'
        ];
        $type_etablissemets =  TypeEtablissement::all();
        return view('admin.lycee.index', $data)->with('type_etablissemets', $type_etablissemets);
    }
    //-----create-----------------------------------////
    public function create()
    {
        return view('admin.lycee.create');
    }
    //-----create-----------------------------------////
    public function store(Request $request)
    {
        $input = $request->all();
        TypeEtablissement::create($input);
        return redirect('admin/lycee')->with('success', 'Type Etablissemet ajouté !');
    }
    //-----delete-----------------------------------////
    public function destroy($id)
    {
        TypeEtablissement::destroy($id);
        return redirect('admin/lycee')->with('success', 'Type Etablissemet deleted !');
    }
}
