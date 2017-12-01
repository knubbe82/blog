<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        // validate a form
        $this->validate(request(), [
            'name'  => 'required',
            'email' =>  'required|email',
            'password'  => 'required|confirmed'
        ]);

        // create and save a user
        $user = User::create([
            'name'  =>  request('name'),
            'email' =>  request('email'),
            'password'  => bcrypt(request('password'))
        ]);

        // sign them in
        auth()->login($user);

        // redirect to the home page
        return redirect()->home();
    }
}
