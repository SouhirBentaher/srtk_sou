<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Ligne;
use Illuminate\Http\Request;

class LigneController extends Controller
{
    public function index()

    {
        $data = [
            'title' => 'Ligne'
        ];
        $lignes =  Ligne::all();
        return view('admin.ligne.index', $data)->with('lignes', $lignes);
    }
    //-----create-----------------------------------////
    public function create()

    {
        $categories = Categorie::all();
        $data = [

            'categories' => $categories,
        ];
        return view('admin.ligne.create', $data)->with('categories', $categories);
    }
    //-----create-----------------------------------////
    public function store(Request $request)
    {
        $input = [
            'nom' => $request->input('nom'),
            'categorie_id' => $request->input('categorie_id'),

        ];
        $ligne = new Ligne($input);
        $ligne->categorie_id = $request->input('categorie_id');
        $ligne->save();
        return redirect('admin/ligne')->with('success', 'Ligne ajouté !');
    }

    //-----edit------------------------------------------------------////
    public function edit($id)
    {
        $ligne = Ligne::find($id);
        return view('admin.ligne.edit')->with('lignes', $ligne);
    }
    //-----update-----------------------------------------------////
    public function update(Request $request, $id)
    {
        $lignes = Ligne::find($id);
        $input = $request->all();
        $lignes->update($input);
        return redirect('ligne')->with('flash_message', 'Ligne Updated!');
    }
    //-----destroy----------------------------------------------////
    public function destroy($id)
    {
        Ligne::destroy($id);
        return redirect('admin/ligne')->with('success', ' ligne deleted !');
    }
}
