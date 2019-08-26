<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tutor extends Controller
{
    public function index()
    {
        return view('tutor.index');
    }
}
