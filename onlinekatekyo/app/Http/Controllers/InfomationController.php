<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfomationController extends Controller
{
    public function index()
    {
        return view('infomation.index');
    }
    public function finish()
    {
        return view('infomation.finish');
    }
    public function company()
    {
        return view('infomation.company');
    }
    public function info()
    {
        return view('infomation.info');
    }
    public function access()
    {
        return view('infomation.access');
    }
    public function form()
    {
	return view('infomation.form');
    }
    public function recruit()
    {
    	return view('recruit.form');
    }
     public function charge()
    {
    	return view('infomation.charge');
    }
     public function faq()
    {
    	return view('infomation.faq');
    }
     public function contact()
    {
        return view('infomation.contact');
    }

    public function service()
    {
        return view('infomation.service');
    }
}
