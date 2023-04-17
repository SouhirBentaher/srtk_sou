<?php

namespace App\Http\Controllers;

use App\Models\Lycee;
use Illuminate\Http\Request;

class LyceeController extends Controller
{
    public function index()

    {
        $data = [
            'title' => 'LYCEE'
        ];
        $lycees =  Lycee::all();
        return view('admin.lycee.index', $data)->with('lycees', $lycees);
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
        Lycee::create($input);
        return redirect('admin/lycee')->with('success', 'Lycee ajouté !');
    }
    //-----delete-----------------------------------////
    public function destroy($id)
    {
        Lycee::destroy($id);
        return redirect('admin/lycee')->with('success', 'Lycee deleted!!!');
    }
}
