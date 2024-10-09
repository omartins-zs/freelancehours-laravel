<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{

    public function __invoke(Request $request)
    {

        $user = User::find(1);

        // $user = User::query()->create([
        //     'name' => 'Gabriel Matheus',
        //     'email' => 'gabriel@email.com',
        //     'password' => 'password',
        // ]);

        //  Exemplo 1
        $user->email_verified_at = now();
        $user->save();

        Auth::login($user);
        Auth::logout();

        return view('teste.jorge');
    }
}
