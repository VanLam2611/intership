<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class RegisterController extends Controller
{
    /**Get form login */
    public function getRegister()
    {
        return view('login.register');
    }

    /**Check account when login */
    public function postRegister(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->username;
        $user->password = bcrypt($request->password);
        $user->save();
        Session::put('signup', "Sign Up Success");
        return Redirect::to('home/login');
    }
}
