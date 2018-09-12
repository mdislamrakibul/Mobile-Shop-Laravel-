<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use DB;

class PhoneCategoryController extends Controller {

    public function add() {
        return view('admin.category.category_add');
    }

    public function _list() {

        return view('admin.category.category_list');
    }

    public function save(Request $request) {
        $this->validate($request, [
            'category_name' => 'required',
            'publication_Status' => 'required|not_in:2',
        ]);
        DB::table('category')->insert([
            [
                'category_name' => $request->category_name,
                'publication_Status' => $request->publication_Status
            ]
        ]);
        Session::flash('success', 'Category Added Successfully');
        return redirect()->route('category.add');
    }

    public function unpublish($id) {
        DB::table('category')
                ->where('id', $id)
                ->update(['publication_Status' => 0]);
        Session::flash('success', 'Category Deactivated Successfully');
        return redirect()->route('category.list');
    }
    public function publish($id) {
        DB::table('category')
                ->where('id', $id)
                ->update(['publication_Status' => 1]);
       return redirect()->route('category.list');
    }

    public function delete($id){
        DB::table('category')->where('id', '=', $id)->delete();
        Session::flash('success', 'Category Deleted Successfully');
        return redirect()->route('category.list');
    }
//    public function add(){
//        
//    }
//    public function add(){
//        
//    }
}
