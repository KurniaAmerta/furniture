<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Auth;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $orders = Order::join('carts', 'orders.cart_id', '=', 'carts.id')
            ->where('carts.user_id', $user->id)->select('orders.*')->get();

        return view('orders.index', compact('orders'));
    }

    public function markAsSuccess($id)
    {
        // Find the order by ID
        $order = Order::find($id);

        // Check if the order exists and its status is not already 'success'
        if ($order && $order->status != 'success') {
            // Update the status
            $order->status = 'success';
            $order->save(); // Save changes to the database

            // You can return a success message or redirect as needed
            return redirect()->back()->with('success', 'Order status updated to success.');
        }

        // If the order does not exist or is already 'success', handle the response
        return redirect()->back()->with('error', 'Order not found or already marked as success.');
    }

    public function sendEmail($id)
    {
        $order = Order::find($id);
        $cart = Cart::find($order->cart_id);

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
    }

    public function sendWhatsApp($id)
    {
        $order = Order::find($id);
        $cart = Cart::find($order->cart_id);

        $subject = "Checkout Cart Details - Cart Code: {$cart->cart_code}";
        $body = "*Checkout Cart Details*\n";
        $body .= "*Cart Code:* {$cart->cart_code}\n";
        $body .= "*Address:* {$cart->address}, {$cart->city}, {$cart->zip_code}, {$cart->country_code}\n\n";
        $body .= "*Items:*\n";

        // Add product names and prices
        foreach ($cart->cartItems as $item) {
            $product = $item->product();
            if ($product) {
                $price = number_format($product->price_after_discount(), 2);
                $body .= "- {$product->name} (x{$item->amount}): Rp{$price} each\n";
            }
        }

        // Add total price
        $totalPrice = number_format($cart->total_price(), 2);
        $body .= "\n*Total Price:* Rp {$totalPrice}\n\n";
        $body .= "Please confirm receipt of this order.";

        // WhatsApp recipient phone number (in international format, no plus sign, e.g., 628123456789)
        $phoneNumber = "6281376475407"; // change this to recipient's phone

        // Encode body for URL
        $encodedMessage = urlencode($body);

        // WhatsApp API URL
        $whatsappUrl = "https://wa.me/{$phoneNumber}?text={$encodedMessage}";

        // Delete session
        session()->forget('cart');

        // Redirect to WhatsApp
        return redirect($whatsappUrl);
    }
}
