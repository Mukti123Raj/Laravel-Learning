<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('register.create');
    }

    public function store(){
        $attributes =request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|unique:users,username|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:255'
        ]);

        // $attributes['password']= bcrypt($attributes['password']);

        $user=User::create($attributes);

        // session()->flash("Success", "Your account has been created.");

        auth()->login($user);

        return redirect('/');
    }
}
