<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;

class ProductController extends Controller {

    //
    public function add() {
        return view('admin.product.product_add');
    }

    public function _list() {
        return view('admin.product.product_list');
    }

    public function save(Request $request) {
        $this->validate($request, [
            'product_name' => 'required',
            'product_category' => 'required|not_in:0',
            'product_description' => 'required',
            'product_price' => 'required',
            'product_color' => 'required|not_in:0',
            'product_image' => 'required',
            'publication_Status' => 'required|not_in:2'
        ]);

        $image = $request->file('product_image');
        $name = str_slug($request->product_name) . '(' . $request->product_color . ')' . '.' . $image->getClientOriginalExtension();
        $path = 'Product-Image/';
        $image->move($path, $name);
        $url = $path . $name;

        $product_name = $request->product_name . '(' . $request->product_color . ')';
        DB::table('product')->insert([
            [
                'product_name' => $product_name,
                'product_category' => $request->product_category,
                'product_description' => $request->product_description,
                'product_price' => $request->product_price,
                'product_color' => $request->product_color,
                'product_image' => $url,
                'publication_Status' => $request->publication_Status,
            ]
        ]);
        Session::flash('success', 'Product Updated Successfully');
        return redirect()->route('product.add');
    }

    public function unpublish($id) {
        DB::table('product')
                ->where('id', $id)
                ->update(['publication_Status' => 0]);

        return redirect()->route('product.list');
    }

    public function publish($id) {
        DB::table('product')
                ->where('id', $id)
                ->update(['publication_Status' => 1]);

        return redirect()->route('product.list');
    }

    public function delete($id) {
        DB::table('product')->where('id', '=', $id)->delete();
        Session::flash('success', 'Product Deleted Successfully');
        return redirect()->route('product.list');
    }

    public function view($id) {

        $product = DB::table('product')
                ->join('category', 'product.product_category', '=', 'category.id')
                ->join('color', 'product.product_color', '=', 'color.id')
                ->select('product.*', 'category.category_name', 'color.color_name')
                ->where('product.id', $id)
                ->first();
        return view('admin.product.product_view', ['product' => $product]);
    }

    public function edit($id) {

        $product = DB::table('product')
                ->join('category', 'product.product_category', '=', 'category.id')
                ->join('color', 'product.product_color', '=', 'color.id')
                ->select('product.*', 'category.category_name', 'color.color_name')
                ->where('product.id', $id)
                ->first();
        return view('admin.product.product_edit', ['product' => $product]);
    }

    public function update(Request $request) {
        $this->validate($request, [
            'product_name' => 'required',
            'product_category' => 'required|not_in:0',
            'product_description' => 'required',
            'product_price' => 'required',
            'product_color' => 'required|not_in:0',
            //'product_image' => 'required',
            'publication_Status' => 'required|not_in:2'
        ]);

        $temp = DB::table('product')->where('id', $request->product_id)->first();
        $newimage = $request->file('product_image');
        $oldimage = $temp->product_image;
        if ($newimage) {
            unlink($oldimage);
            $name = str_slug($request->product_name) . '(' . $request->product_color . ')' . '.' . $newimage->getClientOriginalExtension();
            $path = 'Product-Image/';
            $image->move($path, $name);
            $url = $path . $name;
        } else {
            $url = $oldimage;
        }
//        dd($request->all());

        $product_name = $request->product_name . '(' . $request->product_color . ')';
        DB::table('product')
                 ->where('id', $request->product_id)
                ->update([
            
                'product_name' => $product_name,
                'product_category' => $request->product_category,
                'product_description' => $request->product_description,
                'product_price' => $request->product_price,
                'product_color' => $request->product_color,
                'product_image' => $url,
                'publication_Status' => $request->publication_Status,
            
        ]);
        Session::flash('success', 'Product Updated Successfully');
        return redirect()->route('product.list');
    }

}
