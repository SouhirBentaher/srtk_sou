<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use Illuminate\Http\Request;

class TarifController extends Controller
{
    public function index()

    {
        $data = [
            'title' => 'Tarif'
        ];
        $tarifs =  Tarif::all();
        return view('admin.tarif.index', $data)->with('tarifs', $tarifs);
    }
    //-----create-----------------------------------////
    public function create()
    {
        return view('admin.tarif.create');
    }
    //-----create-----------------------------------////
    public function store(Request $request)
    {
        $input = $request->all();
        Tarif::create($input);
        return redirect('admin/tarif')->with('success', 'Tarif ajouté !');
    }
    //-----show------------------------------------------------------////
    public function show($id)
    {
        $tarif = Tarif::find($id);
        return view('admin.tarif.show')->with('tarifs', $tarif);
    }
    //-----edit------------------------------------------------------////
    public function edit($id)
    {
        $tarif = Tarif::find($id);
        return view('admin.tarif.edit')->with('tarifs', $tarif);
    }
    //-----update-----------------------------------------------////
    public function update(Request $request, $id)
    {
        $tarifs = Tarif::find($id);
        $input = $request->all();
        $tarifs->update($input);
        return redirect('tarif')->with('success', 'Tarif Updated!');
    }
    //-----destroy----------------------------------------------////
    public function destroy($id)
    {
        Tarif::destroy($id);
        return redirect('admin/tarif')->with('success', 'Tarif deleted!');
    }
}
