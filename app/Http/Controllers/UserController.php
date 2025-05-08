<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getByEmail($email)
    {
        $user = User::where('email', $email)->first();

        return view('profile',['user'=>$user]);
    }
}
