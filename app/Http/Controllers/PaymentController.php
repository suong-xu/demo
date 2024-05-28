<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\PaymentProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Stripe\Stripe;
use Stripe\Charge;


// Set your Stripe API key
Stripe::setApiKey('your_stripe_secret_key');


class PaymentController extends Controller
{
    /**
     * Handle payment checkout.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkout(Request $request)
{
    if (session('customer_id') === null) {
        return back()->withErrors(['error' => 'Vui lòng đăng nhập trước khi thanh toán']);
    }

    try {
        $orderId = Str::random(6);
        $customer_id = session('customer_id');
        $shipping_address = $request->shipping_address;
        $shipping_notes = $request->shipping_notes;

        $cartItems = $request->cart;

        if($cartItems === null){
            return back()->withErrors(['error' => 'Vui lòng chọn mua sản phẩm.']);
        }

        foreach ($cartItems as $item) {
            PaymentProduct::create([
                'product_name' => $item['product_name'],
                'product_price' => $item['product_price'],
                'product_quantity' => $item['product_qty'],
                'product_size' => $item['product_size'],
                'order_id' => $orderId,
                'product_image' => $item['product_image']
            ]);
        }

        Payment::create([
            'customer_id' => $customer_id,
            'address' => $shipping_address,
            'notes' => $shipping_notes,
            'payment_products_id' => $orderId,
            'total_cost' => $request->total_cost,
        ]);

        session()->forget('cart');

        return redirect()->route('checkout')->with('success', 'Thanh toán thành công. Cảm ơn vì đã mua hàng.');

        } catch (\Exception $e) {
            // Payment failed
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
