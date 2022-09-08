<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        // Validate the form
        $this->validate(request(),
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
            ]);

        //Hash password
        // todo

        // Create and save user
        $user = User::create(request(['name', 'email', 'password']));


        // Sign in
        auth()->login($user);

        Mail::to($user)->send(new Welcome($user));


        // Redirect the logged user
        return redirect('/');
    }

}
