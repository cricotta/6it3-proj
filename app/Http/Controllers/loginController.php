<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\users;

class loginController extends Controller
{

    function getUsers(Request $req)
    {
        $req->validate([
            'email' => 'required | exists:users',
            'pwd' => 'required'
        ],
            [
                'email.exists' => 'Incorrect Email',
                'pwd.required' => 'The password field is required'
            ]
        );


        $user =  users::where(['email' =>$req->email, 'pwd' => $req->pwd])->first();

        if(!$user || Hash::check($req->pwd, $user->pwd))
        {
            return redirect('/login')->with('status', 'Incorrect Password');
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
