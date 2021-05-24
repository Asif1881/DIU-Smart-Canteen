<?php

namespace App\Http\Controllers\Admin;

use App\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $cart = DB::table('cart')->select('cart.*','items.name as item_name')
        ->join('items','cart.item_id' , '=' , 'items.id')
        ->get();
        return view('admin.cart.index',compact('cart'));
    }

//    function cart(Request $request)
//    {
//
//    }
}
