<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        $cartItems = Cart::with('product')->where('user_id',auth::user()->id)->get();
        return view('customer.pages.cart', compact('cartItems'));
    }

    public function add(Request $request)
    {
        
        $productId = $request->input('product_id');
        $product = Product::findOrFail($productId);

        $cartItem = Cart::where('product_id', $productId)->first();

        if ($cartItem) {
            $cartItem->quantity += 1;
        } else {
            $cartItem = new Cart();
            $cartItem->user_id = auth::user()->id;;
            $cartItem->product_id = $productId;
            $cartItem->quantity = 1;
        }

        $cartItem->save();

        return redirect()->route('cart');
    }

    public function update(Request $request, $id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->quantity = $request->input('quantity');
        $cartItem->save();

        return redirect()->route('cart');
    }

    public function remove($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->delete();

        return redirect()->route('cart');
    }
}
