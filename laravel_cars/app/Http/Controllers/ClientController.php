<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function update(){

        return view('clients.update');

    }

    public function create(){

        return view('clients.create');

    }
}
