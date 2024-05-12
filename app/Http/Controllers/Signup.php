<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Signup extends Controller
{
    public function signup(Request $request) {
        $incomingFields =  $request->validate([
            "name"=> ["required","string",],
            "email"=> ["required","email",],
            "password"=> ["required", "min:8"],
        ]);
        return 'fck you';
    }
}
