<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;


class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::content();
        return view('cart.index', compact('cartItems'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);
        Cart::add($id,$product->name,1,$product->price,['size' => 'medium']);
        return back();
    }

    public function update(Request $request, $id)
    {
        Cart::update($id,$request->qty);
        return back();
    }

    public function destroy($id)
    {
        //
    }
}
