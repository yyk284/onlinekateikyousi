<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    public function sign_in()
    {
        return view('admin.sign_in');
    }

    public function auth(Request $request)
    {
        $name = $request->input('Username');
        $password = $request->input('Password');

        $admin = Admin::query();
        $admin->where('name', $name);
        if ($admin->exists()) {
            if ($password == decrypt($admin->first()->password)) {
                session()->put('admin_auth', true);
            }
        }

        return redirect('/');
    }

    public function sign_out()
    {
        session()->forget('admin_auth');
        return redirect('/');
    }
}

