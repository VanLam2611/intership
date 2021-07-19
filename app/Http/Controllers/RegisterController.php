<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class RegisterController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    /**Get form login */
    public function getRegister()
    {
        return view('auth.register');
    }

    /**Check account when login */
    public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            return Redirect::to('register')->withInput()->withErrors($validator);
        } else {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->username;
            $user->password = bcrypt($request->password);
            $user->save();
            return Redirect::to('login');
        }
        return Redirect::to('register')->withInput()->withErrors("Registration information is wrong");
    }
}
