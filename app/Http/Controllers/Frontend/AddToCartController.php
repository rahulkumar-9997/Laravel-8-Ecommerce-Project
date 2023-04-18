<?php

namespace App\Http\Controllers\Frontend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\producs_dummy;


class addToCartController extends Controller
{
    public function cart()
    {
        return view('frontend.pages.cart');
    }


    public function addToCart($id)
    {
        $product = producs_dummy::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['product_qty']++;

        } else {
            $cart[$id] = [
                "product_name" => $product->product_name,
                "discount" => $product->discount,
                "product_qty" => 1,
                "product_price" => $product->product_price,
                "product_image" => $product->product_image
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

  
    public function update(Request $request)
    {
        //dd($request->id);
        if($request->id && $request->product_qty){
            $cart = session()->get('cart');
            $cart[$request->id]["product_qty"] = $request->product_qty;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

  

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
