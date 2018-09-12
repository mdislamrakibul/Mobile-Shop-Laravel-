<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cart;
class CartController extends Controller
{
    //
    public function add(Request $request){
        $product = DB::table('product')->where('id',$request->id)->first();
        
        $data = array();
        $data['id'] = $product->id;
        $data['name'] = $product->product_name;
        $data['qty'] = 1;
        $data['price'] = $product->product_price;
        $data['options']['image'] = $product->product_image;
        
        Cart::add($data);
        Session::put('product',1);
        return redirect()->route('cart.list');
    }
    
    public function _list(){
        return view('front-end.index.cart_list');
    }
    public function update(Request $request){
        Cart::update($request->rowId, $request->quantity);
        return view('front-end.index.cart_list');
    }
    public function remove(Request $request){
        Cart::remove($request->rowId);
        return view('front-end.index.cart_list');
    }
}
