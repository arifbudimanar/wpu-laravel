<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        //Validate the user
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|email:dns|max:255',
            'password' => 'required|min:8|max:255'
        ]);

        //password encrypt or hash
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // dd($request);



        User::create($validatedData);
        // return request()->all();
        return redirect()->route('login')->with('success', 'Your account has been created');
    }
}
