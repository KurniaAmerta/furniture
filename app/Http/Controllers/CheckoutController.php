<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Order;
use Auth;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $cart = session()->get('cart');
        $countries = config('countries');

        if ($cart) {
            $cartItems = CartItem::where('cart_id', $cart->id)->get();
            return view('checkouts.index', compact('user', 'cart', 'cartItems', 'countries'));
        } else {
            return redirect()->route('carts');
        }
    }

    public function checkoutCart(Request $request)
    {
        $user = Auth::user();
        $cart = session()->get('cart');

        // Check if the cart exists for the user
        if ($cart) {
            // Update the cart details with the request data
            $cart->country_code = $request->input('country', $cart->country_code); // Use existing country if not provided
            $cart->phone = $request->input('phone', $cart->phone); // Use existing phone if not provided
            $cart->city = $request->input('city', $cart->city); // Use existing city if not provided
            $cart->zip_code = $request->input('zip-code', $cart->zip_code); // Use existing zip code if not provided
            $cart->address = $request->input('address', $cart->address); // Use existing address if not provided

            // Save the updated cart
            $cart->save();

            // Check if an order exists for this cart
            $order = Order::where('cart_id', $cart->id)->first();

            // If no order exists, create a new one
            if (!$order) {
                $order = Order::create([
                    'status' => 'request', // Set default status to 'request'
                    'shipping_code' => null, // Add your default values or null
                    'shipping_companny' => null,
                    'total_payment' => $cart->total_price(),
                    'cart_id' => $cart->id
                ]);
            }

            $subject = "Checkout Cart Details - Cart Code: {$cart->cart_code}";
            $body = "Cart Code: {$cart->cart_code}\n";
            $body .= "Address: {$cart->address}, {$cart->city}, {$cart->zip_code}, {$cart->country_code}\n\n";
            $body .= "Items:\n";

            // Add product names and prices
            foreach ($cart->cartItems as $item) {
                $product = $item->product();
                if ($product) {
                    $body .= "- {$product->name} (x{$item->amount}): Rp" . number_format($product->price_after_discount(), 2) . " each\n";
                }
            }

            // Add total price
            $totalPrice = number_format($cart->total_price(), 2);
            $body .= "\nTotal Price: Rp $totalPrice\n\n";
            $body .= "Please confirm receipt of this order.";

            // Email recipient
            $emailTo = "example@example.com"; // Change this to the recipient's email address

            // Mailto URL format
            $mailtoUrl = "mailto:$emailTo?subject=" . str_replace('+', '%20', urlencode($subject)) . "&body=" . str_replace('+', '%20', urlencode($body));

            // Delete session
            session()->forget('cart');

            // Redirect to default email client with pre-filled subject and body
            return redirect($mailtoUrl);
            return redirect()->route('payment');
        }

        return redirect()->back()->with('error', 'No cart found for the user.');
    }
}
