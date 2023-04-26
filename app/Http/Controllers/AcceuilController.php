<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Acceuil'
        ];
        return view('index', $data);
    }
}
