<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    public function index()

    {
        $data = [
            'title' => 'Station'
        ];
        $stations =  Station::all();
        return view('admin.station.index', $data)->with('stations', $stations);
    }
    //-----create-----------------------------------////
    public function create()
    {
        return view('admin.station.create');
    }
    //-----create-----------------------------------////
    public function store(Request $request)
    {
        $input = $request->all();
        Station::create($input);
        return redirect('admin/station')->with('success', 'Station ajouté !');
    }
    //-----show------------------------------------------------------////
    public function show($id)
    {
        $station = Station::find($id);
        return view('admin.station.show')->with('stations', $station);
    }
    //-----edit------------------------------------------------------////
    public function edit($id)
    {
        $station = Station::find($id);
        return view('admin.station.edit')->with('stations', $station);
    }
    //-----update-----------------------------------------------////
    public function update(Request $request, $id)
    {
        $stations = Station::find($id);
        $input = $request->all();
        $stations->update($input);
        return redirect('station')->with('flash_message', 'Station Updated!');
    }
    //-----destroy----------------------------------------------////
    public function destroy($id)
    {
        Station::destroy($id);
        return redirect('station')->with('flash_message', 'Station deleted!');
    }
}
