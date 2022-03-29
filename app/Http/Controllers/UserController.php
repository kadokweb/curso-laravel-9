<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function show($id)
    {
        return view('users.show');
        // dd('users.show', $id);
    }

    public function andamento()
    {
        return view('andamento');
    }
}
