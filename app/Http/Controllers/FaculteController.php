<?php

namespace App\Http\Controllers;

use App\Models\Faculte;
use Illuminate\Http\Request;

class FaculteController extends Controller
{
    public function index()

    {
        $data = [
            'title' => 'FACULTE'
        ];
        $facultes =  Faculte::all();
        return view('admin.faculte.index', $data)->with('facultes', $facultes);
    }
    //-----create-----------------------------------////
    public function create()
    {
        return view('admin.faculte.create');
    }
    //-----create-----------------------------------////
    public function store(Request $request)
    {
        $input = $request->all();
        Faculte::create($input);
        return redirect('admin/faculte')->with('success', 'Faculte ajouté !');
    }
}
