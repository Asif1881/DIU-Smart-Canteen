<?php

namespace App\Http\Controllers;

use App\Item;
use App\Cart;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\AbstractList;

class CartController extends Controller
{
    function index()
    {
//        $cart = Cart::all();
//        return view('admin.cart.index',compact('cart'));
    }

    public function cart(Request $request)
    {
        $cart = new Cart;
        $cart->item_id = $request->item_id;
        $cart->save();
//        return redirect()->route('welcome')->with('successMsg','Item Succesfully Added To The Cart');
//        redirect('/');
        Toastr::success('Item Succesfully Added To The Cart','Success',["positionClass" => "toast-top-center"]);
        return redirect()->back();
    }
}
