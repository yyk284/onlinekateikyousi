<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfomationController extends Controller
{
    public function index()
    {
        return view('infomation.index');
    }
    public function about()
    {
        return view('infomation.about');
    }
    public function charmpoint()
    {
        return view('infomation.charmpoint');
    }
    public function list()
    {
        return view('infomation.list');
    }
    public function price()
    {
        return view('infomation.price');
    }
}
