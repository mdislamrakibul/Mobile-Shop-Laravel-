<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cart;
use Stripe\Stripe;
use Stripe\Charge;
// require_once('/path/to/stripe-php/init.php');
class PaymentController extends Controller {

    //
    public function payment(Request $request) {
        
        // Set your secret key: remember to change this to your live secret key in production
		// See your keys here: https://dashboard.stripe.com/account/apikeys
		Stripe::setApiKey("################## publictioble api key#####################");


		$token = $_POST['stripeToken'];
		try{
			$charge = \Stripe\Charge::create([
   		 	'amount' => ceil(Cart::total())*100,
		    'currency' => 'usd',
		    'description' => 'Mobile Shop',
		    'source' => $token,
		]);
		}
		catch(\Stripe\Error\Card $e){
                     return redirect('/user-payment')->with('error', $e->getMessage());
		}             

		Cart::destroy();
		Session::flash('success','Product purched successfully');
		return redirect('/user-payment');
		
		
    }
    
    public function my_account(){
        return view ('front-end.index.my_account');
    }
    public function myaccount(Request $request){
        $this->validate($request, [
            'login_email' => 'required|email',
            'login_password' => 'min:4'
        ]);
        
        $account_email = $request->login_email;
        $password = $request->login_password;
        //dd($request->all());
        $user = DB::table('user')
                ->where('email',$account_email)
                ->where('password',$password)
                ->first();
        if($user){ 
            
            Session::put('user_account_email',$account_email);
            Session::put('my_account',1);
            return redirect()->route('account_details');                
        }
        Session::flash('guilt','Email or Password Error');
        return redirect()->route('my_account');
    }
    
     public function account_details(){
        return view ('front-end.index.account_details');
    }
     public function bkash_payment(Request $request){
       
        // Cart::store($request->name);        
        // Cart::instance('wishlist')->store($request->name);     
    }

}
