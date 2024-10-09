<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function __invoke(Request $request)
    {

        $user = User::find(1);

        //  Exemplo 1
        $user->email_verified_at = now();
        $user->save();

        dd($user->email_verified_at->diffForHumans());

        //  Exemplo 2
        $user->update([
            'email_verified_at' => now()->subMonths(10)
        ]);

        dump($user->email_verified_at);

        dd($user->email_verified_at->diffForHumans());

        return view('teste.jorge');
    }
}
