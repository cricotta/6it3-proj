<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;

class usersController extends Controller
{

    function getData(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'uid' => 'required | min:5 | max:10 | unique:users',
            'email' => 'required | unique:users',
            'pwd' => 'required  | min:5 | same:pwdrepeat',
            'pwdrepeat' => 'required  | min:5 | same:pwd'
        ],
            [
                'pwd.same' => 'passwords do not match',
                'pwdrepeat.same' => 'passwords do not match',
                'pwd.required' => 'The password field is required',
                'pwdrepeat.required' => 'The password confirmation field is required',
                'pwd.min' => 'Password must be at least 5 characters',
                'pwdrepeat.min' => 'Password must be at least 5 characters',

                'uid.required' => 'user ID is required'

            ]
        );

        $user= new users;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->pwd=$req->pwd;
        $user->uid=$req->uid;
        $user->save();

        return redirect('/')->with('status', 'Account Created!');;

    }

    function Logout()
    {
        $userId=Session::get('user')['Id'];
        $deleted2 = DB::table('cart')
            ->where('user_id', '=', $userId)
            ->delete();

        Session::forget('user');
        return redirect('login');
    }

}
