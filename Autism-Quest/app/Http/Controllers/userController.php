<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class userController extends Controller
{
    // Display the registration form
    public function create(){
        return view('users.register');
    }

    // Store the user data after validation
    public function store(Request $request){
        // Validate the form fields
        $formFields = $request->validate([
            'first_name' => ['required','min:3'],
            'last_name' => ['required','min:3'],
            'email' => ['required','email',Rule::unique('users','email')],
            'password' => 'required|min:6'
        ]);

        // Hash the password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create a new User
        $user = User::create($formFields);

        // Log in the newly created user
        auth()->login($user);

        // Redirect to the home page
        return redirect('/');
    }

    // Log out the authenticated user
    public function logout(Request $request){
        // Logout the user
        auth()->logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the CSRF token
        $request->session()->regenerateToken();

        // Redirect to the home page
        return redirect('/');
    }

    // Display the login form 
    public function login(){
        return view('users.login');
    }

    // Authenticate the user
    public function authenticate(Request $request){
        // Validate the form fields
        $formFields = $request->validate([
            'email' => ['required','email'],
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            // Redirect to the home page on successful authentication
            return redirect('/');
        }

        // Redirect back with an error message if authentication fails
        return back()->withErrors(['email'=> 'Invalid Credentials'])->onlyInput('email');
    }
}
