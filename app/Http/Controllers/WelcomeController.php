<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function __invoke(Request $request)
    {

        $user = User::find(1);
        // var_dump($user);
        // dump($user);
        // Dump and Die
        dump($user);
        dd($user->email_verified_at);

        return view('teste.jorge');
    }
}
