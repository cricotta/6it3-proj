<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\product;
use App\Models\orders;
use Illuminate\Support\Facades\DB;
use Session;

class reqController extends Controller
{
    function joins()
    {
        if(Session::has('user'))
        {
            $userId = Session::get('user')['Id'];
            $left = DB::table('users')
                ->select('users.*', 'cart.*')
                ->leftjoin('cart', 'users.Id', '=', 'cart.user_id')
                ->get();

            $right = DB::table('cart')
                ->select('users.*', 'cart.*')
                ->leftjoin('users', 'cart.user_id', '=', 'users.Id')
                ->get();

            return view('requirements', ['left' => $left], ['right' => $right]);
        }
        else
        {
            return view('/requirements');
        }
    }
}
