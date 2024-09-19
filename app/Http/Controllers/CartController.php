<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\CartItem;
use App\Models\Product;
use Auth;

class CartController extends Controller
{
    public function index()
    {
        $customer = Customer::where('user_id', Auth::id())->first();
        $cart = Cart::where('customer_id', $customer->id)->with('items.product')->first();
        return view('customer.cart', compact('cart'));
    }

    public function addToCart(Request $request, $productId)
    {
        // return $productId;
        // $product = Product::findOrFail($productId);

        $customer = Customer::where('user_id', Auth::id())->first();
        // Check if the user has a cart, if not create one
        $cart = Cart::firstOrCreate([
            'customer_id' => $customer->id,
         ]);

        // Check if the product is already in the cart
        $cartItem = CartItem::where('cart_id', $cart->id)
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            // If product exists in cart, update quantity
            $cartItem->qty += $request->qty;
            $cartItem->save();
        } else {
            // Otherwise, create a new cart item
            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $productId,
                'qty' => $request->qty
            ]);
        }

        return redirect()->route('cart.index')->with('success', 'Product added to cart!');
    }

    public function removeFromCart($itemId)
    {
        $cartItem = CartItem::findOrFail($itemId);
        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', 'Product removed from cart!');
    }

    public function updateFromCart (Request $request, $itemId) {
        $request->validate([
            'qty' => 'required|integer|min:1',
        ]);

        $cartItem = CartItem::findOrFail($itemId);
        $cartItem->qty = $request->qty;
        $cartItem->save();
        return redirect()->back();
    }
}
