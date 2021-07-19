<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class LogoutController extends Controller
{
    /**Logout user*/
    public function logout()
    {
        if(Auth::logout()){
            return Redirect::to('login');
        }
    }

}