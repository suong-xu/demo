<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    // Set your Stripe API key
    Stripe::setApiKey('your_stripe_secret_key');

    // Your checkout logic here

        try {
            // Charge the customer's card
            $charge = Charge::create([
                'amount' => 1000, // Amount in cents
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'Example charge',
                'receipt_email' => $request->input('shipping_email'),
            ]);

            // Payment successful, handle further processing
            // For example, save order to database, send confirmation email, etc.

            return redirect()->route('checkout')->with('success', 'Payment successful! Thank you for your purchase.');


        } catch (\Exception $e) {
            // Payment failed
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
