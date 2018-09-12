<?php


Route::get('/', function () {
    return view('website_index');
});

Route::get('category/{id}', [
    'uses'=>'IndexController@category_by_id',
    'as'=>'category_by_id.add'
]);

Route::get('product-details/{id}', [
    'uses'=>'IndexController@product_details',
    'as'=>'product.details'
]);



//##################################### Admin
Route::get('/backend/signin', function () {
    return view('admin.signin');
});
Route::get('/backend/signup', function () {
    return view('admin.signup');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

//#################################### Admin  Category
Route::get('/admin/phone-category/add', [
    'uses'=>'PhoneCategoryController@add',
    'as'=>'category.add'
]);

Route::get('/admin/phone-category/list', [
    'uses'=>'PhoneCategoryController@_list',
    'as'=>'category.list'
]);

Route::post('/admin/phone-category/save',[
    'uses'=>'PhoneCategoryController@save',
    'as'=>'category.save'
    
]);
Route::get('/admin/phone-category/unpublish/{id}',[
    'uses'=>'PhoneCategoryController@unpublish',
    'as'=>'category.unpublish'
    
]);
Route::get('/admin/phone-category/publish/{id}',[
    'uses'=>'PhoneCategoryController@publish',
    'as'=>'category.publish'
    
]);
Route::get('/admin/phone-category/delete/{id}',[
    'uses'=>'PhoneCategoryController@delete',
    'as'=>'category.delete'
    
]);

//######################### Admin Product

Route::get('/admin/product/add', [
    'uses'=>'ProductController@add',
    'as'=>'product.add'
]);
Route::get('/admin/product/list', [
    'uses'=>'ProductController@_list',
    'as'=>'product.list'
]);
Route::post('/admin/product/save', [
    'uses'=>'ProductController@save',
    'as'=>'product.save'
]);

Route::get('/admin/product/unpublish/{id}',[
    'uses'=>'ProductController@unpublish',
    'as'=>'product.unpublish'
    
]);
Route::get('/admin/product/publish/{id}',[
    'uses'=>'ProductController@publish',
    'as'=>'product.publish'
    
]);
Route::get('/admin/product/delete/{id}',[
    'uses'=>'ProductController@delete',
    'as'=>'product.delete'
    
]);
Route::get('/admin/product/view/{id}',[
    'uses'=>'ProductController@view',
    'as'=>'product.view'
    
]);
Route::get('/admin/product/edit/{id}',[
    'uses'=>'ProductController@edit',
    'as'=>'product.edit'
    
]);
Route::post('/admin/product/update',[
    'uses'=>'ProductController@update',
    'as'=>'product.update'
    
]);
//########################### Cart

Route::post('/cart',[
    'uses'=>'CartController@add',
    'as'=>'cart.add'
]);
Route::get('/cart-list',[
    'uses'=>'CartController@_list',
    'as'=>'cart.list'
]);
Route::post('/cart-update',[
    'uses'=>'CartController@update',
    'as'=>'cart.update'
]);
Route::post('/cart-remove',[
    'uses'=>'CartController@remove',
    'as'=>'cart.remove'
]);

//#################################  check out


Route::get('check-out/',[
    'uses'=>'CheckoutController@checkout',
    'as'=>'checkout'
]);

//#################################  User

Route::post('user/login',[
    'uses'=>'UserController@login',
    'as'=>'login'
]);
Route::post('user/register',[
    'uses'=>'UserController@register',
    'as'=>'register'
]);

Route::get('logout',[
    'uses'=>'UserController@logout',
    'as'=>'logout'
]);


//####################################### Payment

Route::get('user-payment',[
    'uses'=>'UserController@payment',
    'as'=>'user_payment'
]);

Route::post('payment',[
    'uses'=>'PaymentController@payment',
    'as'=>'payment'
]);


Route::post('payment',[
    'uses'=>'PaymentController@bkash_payment',
    'as'=>'bkash_payment'
]);
//Route::get('my-account',[
//    'uses'=>'PaymentController@my_account',
//    'as'=>'my_account'
//]);
//Route::post('my-account',[
//    'uses'=>'PaymentController@myaccount',
//    'as'=>'my_account'
//]);
//Route::get('account-details',[
//    'uses'=>'PaymentController@account_details',
//    'as'=>'account_details'
//]);

//######################################
//This will in above_header page
//<!--#########################-->
//<!--                        @if(Session::get('my_account') == 1)
//                            <li><a href="{{route('account_details')}}">My account</a></li>
//                        @elseif(Session::get('my_account') == 0)
//                             <li><a href="{{route('my_account')}}">My account</a></li>
//                        @endif-->
//<!--##############################-->


Route::get('stripe-get','CheckoutController@get_stripe');
Route::post('stripe-post','CheckoutController@post_stripe');
Route::get('stripe-pay','CheckoutController@pay_stripe');
Route::post('process','CheckoutController@process');

