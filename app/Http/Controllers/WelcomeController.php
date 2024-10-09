<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function __invoke(Request $request)
    {

        $user = User::find(1);
        // 1°Opção
        $user->email_verified_at = now();
        $user->save();

        // 2°Opção
        $user->update(['email_verified_at' => now()]);

        return view('teste.jorge');
    }
}
