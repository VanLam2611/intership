<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class LoginController extends Controller
{
    /**Get form login */
    public function getLogin()
    {
        return view('login.login');
    }

    /**Check account when login */
    public function postLogin(Request $request)
    {
        $user = User::all();
        foreach ($user as $value) {
            //Check email and password
            if ($request->username == $value->email && password_verify($request->password, $value->password)) {
                Session::put('user_id', $value->id);
                Session::put('username', $value->name);
                Session::put('email', $value->email);
                return Redirect::to('/home');
            }
        }
        Session::flash('error', 'Email or Password is wrong!');
        return Redirect::to('/home/login');
    }
}
