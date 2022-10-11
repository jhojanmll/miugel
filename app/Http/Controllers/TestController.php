<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function createUser()
    {
        $user = User::where('email','test@mail.com')->firstOr(function () {
    
            $new = User::factory()->create([
                'name' => 'Usuario Test',
                'email' => 'test@mail.com'
            ]);
            
            return $new;

        });

        return $user;
    }
}
