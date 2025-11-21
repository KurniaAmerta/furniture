<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartsController extends Controller
{
    public function index()
    {
        // Get the cart from the session
        $cart = session()->get('cart');

        if ($cart) {
            // Fetch the items associated with the cart from the session
            $cartItems = CartItem::where('cart_id', $cart->id)->get();
        } else {
            // If no cart exists, set cartItems to an empty collection
            $cartItems = collect();
        }

        return view('carts.index', compact('cart', 'cartItems'));
    }

    public function addToCart(Request $request, $productId)
    {
        // Find the product
        $product = Product::findOrFail($productId);

        \Log::info('Storing request data', [$product->stock]);

        if($product->stock > 0){
            $user = Auth::user();
            $cart = session()->get('cart');

            // If cart doesn't exist in session, create a new cart
            if (!$cart) {
                $cart = Cart::firstOrCreate(
                    ['user_id' => $user->id],
                    [
                        'cart_code' => 'CART-' . strtoupper(uniqid()),
                        'name' => $user->name,
                        'phone' => $user->phone,
                        'country_code' => 'ID', // Default or dynamic country code
                        'city' => 'Jakarta', // Example city, you can adjust this
                        'zip_code' => '12345', // Example zip code
                        'address' => 'Some address', // Example address
                    ]
                );
                session()->put('cart', $cart);
            }

            // Check if the item already exists in the cart
            $cartItem = CartItem::where('cart_id', $cart->id)
                ->where('product_id', $productId)
                ->first();

            if ($cartItem) {
                // If the item exists, increment the amount
                $cartItem->amount += $request->input('amount', 1);
                $cartItem->save();
            } else {
                // Otherwise, create a new cart item
                CartItem::create([
                    'cart_id' => $cart->id,
                    'product_id' => $product->id,
                    'amount' => $request->input('amount', 1),
                ]);
            }

            return redirect()->route('products')->with('success', 'Product added to cart!');
        }else{
            return redirect()->route('products')->with('fail', 'Product failed added to cart!');
        }
    }

    public function increaseItemAmount($itemId)
    {
        $cart = session()->get('cart');

        if ($cart) {
            $cartItem = CartItem::where('cart_id', $cart->id)
                ->where('id', $itemId)
                ->first();

            if ($cartItem) {
                // Increment the item amount
                $cartItem->amount += 1;
                $cartItem->save();
            }
        }

        return redirect()->back()->with('success', 'Item quantity increased!');
    }

    public function decreaseItemAmount($itemId)
    {
        $cart = session()->get('cart');

        if ($cart) {
            $cartItem = CartItem::where('cart_id', $cart->id)
                ->where('id', $itemId)
                ->first();

            if ($cartItem && $cartItem->amount > 1) {
                // Decrease the item amount
                $cartItem->amount -= 1;
                $cartItem->save();
            } elseif ($cartItem) {
                // Optionally, remove the item if the amount reaches 0
                $cartItem->delete();
            }
        }

        return redirect()->back()->with('success', 'Item quantity decreased!');
    }

    public function removeItem($itemId)
    {
        $cart = session()->get('cart');

        if ($cart) {
            // Find the cart item
            $cartItem = CartItem::where('cart_id', $cart->id)
                ->where('id', $itemId)
                ->first();

            // Remove the cart item if it exists
            if ($cartItem) {
                $cartItem->delete();
            }
        }

        return redirect()->back()->with('success', 'Item removed from cart!');
    }

}
