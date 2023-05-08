<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Users'
        ];
        $users =  User::all();
        return view('admin.users.index', $data)->with('users', $users);
    }
    //-----create-----------------------------------////
    public function create()
    {
        return view('admin.users.create');
    }
    //-----store-----------------------------------////
    public function store(Request $request)
    {
        $input = $request->all();
        User::create($input);
        return redirect('admin/users')->with('success', ' Administrateur ajouté !');
    }

    //-----delete-----------------------------------////
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('admin/users')->with('success', 'Administrateur deleted !');
    }
}
