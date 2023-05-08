<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()

    {
        $data = [
            'title' => 'Categorie'
        ];
        $categories =  Categorie::all();
        return view('admin.stagiere.index', $data)->with('categories', $categories);
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
        Categorie::create($input);

        return redirect('admin/stagiere')->with('success', 'Categorie ajouté !');
    }
    //-----delete-----------------------------------////
    public function destroy($id)
    {
        Categorie::destroy($id);
        return redirect('admin/stagiere')->with('success', ' Categorie deleted !');
    }
}
