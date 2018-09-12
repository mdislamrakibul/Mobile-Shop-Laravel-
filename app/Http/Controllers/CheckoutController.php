<?php

namespace App\Http\Controllers;

use Session;
use Cart;
use DB;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class CheckoutController extends Controller {

    //

    public function checkout() {
        return view('front-end.index.checkout');
    }

    public function get_stripe() {
        return view('stripe.stripe-get');
    }

    public function post_stripe(Request $request) {
        Stripe::setApiKey('sk_test_RlBQ5xSVC1gBAoJNHskC0OWn');
        try {
            $charge = Charge::create(array(
                        "amount" => 1000,
                        "currency" => "usd",
                        "source" => $request->input('stripeToken'), // obtained with Stripe.js
                        "description" => "Test Charge"
            ));
        } catch (\Exception $e) {
            return redirect('/stripe-get')->with('error', $e->getMessage());
        }

        return redirect('/stripe-get')->with('success', 'Successfully Purchased Products!!');
    }

    public function pay_stripe() {
        return view('stripe.pay');
    }

    public function process() {

        \Stripe\Stripe::setApiKey("sk_test_RlBQ5xSVC1gBAoJNHskC0OWn");


        $token = $_POST['stripeToken'];
        try {
            $charge = \Stripe\Charge::create([
                        'amount' => ceil(Cart::total())*100,
                        'currency' => 'usd',
                        'description' => 'Mobile Charge',
                        'source' => $token,
            ]);
        } catch (\Stripe\Error\Card $e) {
            
        }
        Cart::destroy();
        Session::flash('success','Product purched successfully');
         return redirect('/user-payment');
         
    }

}
