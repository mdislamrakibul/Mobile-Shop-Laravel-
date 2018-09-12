<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;
use Auth;

use Cart;

class UserController extends Controller {

    //
    public function login(Request $request) {
        $this->validate($request, [
            'login_email' => 'required|email',
            'login_password' => 'min:4'
        ]);
        
        $email = $request->login_email;
        $password = $request->login_password;
        //dd($request->all());
        $user = DB::table('user')
                ->where('email',$email)
                ->where('password',$password)
                ->first();
        if($user){ 
            Session::put('session_value',1);
            Session::put('my_account',1);
            Session::put('user_login_email',$request->login_email);
            return redirect()->route('user_payment');                
        }
        return redirect()->route('checkout');
    }

    public function register(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'min:4'
        ]);

        DB::table('user')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        Session::flash('success', 'User Registaration Successfull');
        return redirect()->route('checkout');
    }
    
    public function payment(){
        return view('front-end.index.payment');
    }
    
    public function logout(){
        Auth::logout();
        //Session::flush();
        Cart::destroy();
        Session::put('session_value', 0);
        Session::put('my_account',0);
        return redirect('/');
        
    }

}
