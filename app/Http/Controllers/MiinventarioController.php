<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiinventarioController extends Controller
{
    public function index() {
        return view('miinventario.index');
    }
}
