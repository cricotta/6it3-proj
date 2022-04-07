<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\product;
use App\Models\orders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\orderMail;
use Session;


class productController extends Controller
{

        function AddToCart(Request $req)
    {
        $req->validate([
            'quantity' => 'required | min:1 | max:10'
        ]);

        if($req->session()->has('user')) {

            $cart= new cart;
            $cart->user_id=$req->session()->get('user')['Id'];
            $cart->product_id=$req->product_id;
            $cart->quantity=$req->quantity;
            $cart->save();


            return redirect('/products')->with('status', 'Item Added To Cart!');

        }
        else {
           return redirect('/login');
        }
    }



    function cartList()
    {
        if(Session::has('user'))
        {
            $userId = Session::get('user')['Id'];
            $products = DB::table('cart')
                ->select('products.*', 'cart.*')
                ->join('products', 'cart.product_id', '=', 'products.product_id')
                ->where('cart.user_id', '=', $userId)
                ->get();

            return view('cart', ['products' => $products]);
        }
        else
        {
            return view('/login');
        }

    }

    function removeCart($cart_id)
    {
        $deleted = DB::table('cart')
            ->where('cart_id', '=', $cart_id)
            ->delete();

        return redirect('/cart');
    }

    function completeOrder(Request $req)
    {
        $order= new orders;
        $order->order_cont=$req->order_cont;
        $order->user_id=$req->user_id;
        $order->order_total=$req->order_total;
        $order->order_notes=$req->order_notes;
        $order->date_required=$req->date_required;
        $order->save();

        $userId=Session::get('user')['Id'];
        $deleted3 = DB::table('cart')
            ->where('user_id', '=', $userId)
            ->delete();

        $userEmail=Session::get('user')['email'];
        $userName=Session::get('user')['name'];

        $orderMail = array(

            'name' => $userName,
            'email' => $userEmail,
            'date' => $req->date_required,
            'notes' => $req-> order_notes,
            'total' => $req-> order_total,
            'contents' => $req-> order_cont

        );
        Mail::to($orderMail['email'])->send(new orderMail($orderMail));
        Mail::to('connorricotta@gmail.com')->send(new orderMail($orderMail));
        return redirect('/')->with('status', 'Order Submitted, Thanks!');
    }

    function search(Request $req)
    {

        $req->validate([
            'search_prod' => 'required'

        ]);
        $search = $req->search_prod;
        $searchRes = DB::table('products')
            ->select('products.*')
            ->where('products.product_name', 'like', '%'.$search.'%')
            ->get();
        return view('search_results', ['searchRes'=>$searchRes]);

    }

    function showOrders()
    {
        if(Session::has('user'))
        {
            $userId=Session::get('user')['Id'];
            $products= DB::table('orders')

                ->select('orders.*')
                ->where('orders.user_id', '=', $userId)
                ->get();

            return view('orders', ['products'=>$products]);
        }
        else
        {
            return view('/login');
        }
    }

}
