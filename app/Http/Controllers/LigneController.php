<?php

namespace App\Http\Controllers;

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
        return view('admin.ligne.create');
    }
    //-----create-----------------------------------////
    public function store(Request $request)
    {
        $input = $request->all();
        Ligne::create($input);
        return redirect('admin/ligne')->with('success', 'Ligne ajouté !');
    }
    //-----show------------------------------------------------------////
    public function show($id)
    {
        $ligne = Ligne::find($id);
        return view('admin.ligne.show')->with('lignes', $ligne);
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
        return redirect('ligne')->with('flash_message', 'Ligne deleted!');
    }
}
