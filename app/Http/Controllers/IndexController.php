<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;

class IndexController extends Controller {

    //
    public function category_by_id($id) {
        $product = DB::table('product')
                ->join('category', 'product.product_category', '=', 'category.id')
                ->select('product.*', 'category.category_name')
                ->where('product.publication_status', 1)
//                ->where('product.product_category',$id)
                ->where('category.category_name', $id)
                ->orderBy('product.id', 'desc')
                ->paginate(8);

        return view('front-end.index.category_by_id', ['product' => $product]);
    }

    public function product_details($id) {
        $product_by_id = DB::table('product')
                ->join('category', 'product.product_category', '=', 'category.id')
                ->select('product.*', 'category.category_name')
                ->where('product.id', $id)
                ->first();

        return view('front-end.index.product_details', ['product_by_id' => $product_by_id]);
    }

    public function store() {
        return view('front-end.index.store');
    }

}
