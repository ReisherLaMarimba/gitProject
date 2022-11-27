<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlDashboard extends Controller
{
    public function create(){
        return view('usuarios.dashboard');
    }
}
