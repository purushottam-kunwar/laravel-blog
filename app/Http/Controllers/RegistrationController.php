<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegistrationFormRequest;
use App\Mail\Welcome;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(UserRegistrationFormRequest $request)
    {

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
