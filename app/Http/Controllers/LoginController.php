<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    protected function validator(array $data){
        return Validator::make($data, [
            'email' => 'required|email|max:255',
            'password' => 'required|min:0'
        ]);
    }
    /**Get form login */
    public function getLogin()
    {
        return view('auth.login');
    }

    /**Check account when login */
    public function postLogin(Request $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $validator = $this->validator($request->all());
        if($validator->fails()){
            return Redirect::to('login')->withInput()->withErrors($validator);
        }
        if(Auth::attempt($arr)){
            return Redirect::to('/home');
        }
        else{
            return Redirect::to('login')->withInput()->withErrors("Email or password is wrong!");
        }
        return Redirect::to('/login');
    }
}
