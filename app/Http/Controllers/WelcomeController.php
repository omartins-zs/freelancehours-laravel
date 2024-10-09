<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function __invoke(Request $request)
    {
        $user = User::query()->create([
            'name' => 'Gabriel Matheus',
            'email' => 'gabriel@email.com',
            'password' => 'password',
        ]);

        var_dump($user);
        dump($user);
        // Dump and Die
        dd($user);

        return view('teste.jorge');
    }
}
