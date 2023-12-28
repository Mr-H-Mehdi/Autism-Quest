<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class userController extends Controller
{
    public function create(){
        return view('users.register');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'first_name' => ['required','min:3'],
            'last_name' => ['required','min:3'],
            'email' => ['required','email',Rule::unique('users','email')],
            'password' => 'required|min:6'
            
        ]);
        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        //create User
        $user = User::create($formFields);
        

        //login
        auth()->login($user);

        return redirect('/')->withErrors("not logged in");

    }

    public function logout(Request $request){

        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');



    }

    //show login form 
    public function login(){
        return view('users.login');
    }

    public function authenticate(Request $request){
        $formFields = $request->validate([
            
            'email' => ['required','email'],
            'password' => 'required',
            
        ]);
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/');
        }
        return back()->withErrors();
    }

}

