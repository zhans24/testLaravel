<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function login(Request $request){
        try {
            $user=User::where('email',$request['email'])->first();
            if ($user and Hash::check($request['password'],$user->password)){
                return response()->json(["message" => "Login success", "redirect" => "/zhasik"]);
            }else{
                return response()->json(["message"=>"Email or password incorrect"]);
            }
        }catch (\Exception $e){
            Log::error('Login error: ' . $e->getMessage());
        }
    }

    public function register(Request $request)
    {
        try {
            $user=User::where('email',$request['email'])->first();

            if (!$user) {
                User::create([
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'password' => Hash::make($request['password'])
                ]);

                return response()->json(["message"=>"User signed up successfully",'success'=>true],201);
            }else {
                return response()->json(["message"=>"This email is exist"]);
            }
        }catch (\Exception $e) {
            Log::error('Login error: ' . $e->getMessage());
        }
    }
}
