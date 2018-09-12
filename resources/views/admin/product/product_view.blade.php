@extends('admin.dashboard')
@section('content')
<div class="row-fluid">
    
    <!-- block -->
    <div class="block">

        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Product </div>
            <a href="{{url('/admin/product/edit/'.$product->id)}}" class=" btn btn-primary pull-right">
                <i class="icon-edit icon-white"></i>Update Product</a>
        </div>
        <div class="row-fluid">
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif

        </div>
        <div class="block-content collapse in">

            <div class="span12">

                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    
                        <tr>
                            <th>ID</th>
                            <th>{{$product->id}}</th>
                        </tr>
                        <tr>
                            <th>Product Name(Color code)</th>
                            <th>{{$product->product_name}}</th>
                        </tr>
                        <tr>
                            <th>Product Category</th>
                            <th>{{$product->category_name}}</th>
                        </tr>
                        <tr>
                            <th>Product Description</th>
                            <th>{{$product->product_description}}</th>
                        </tr>
                        <tr>
                            <th>Product Color</th>
                            <th>{{$product->color_name}}</th>
                        </tr>
                        <tr>
                            <th>Product Price (Tk.)</th>
                            <th>{{$product->product_price}} Tk.</th>
                        </tr>
                        <tr>
                            <th>Product Image</th>
                            <th><img src='{{asset($product->product_image)}}' alt="{{$product->product_name}}" height="250" 
                 width="200"/></th>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <th>{{$product->publication_Status==1?'Published':'Unpublished'}}</th>
                        </tr>

                </table>
            </div>
            <div>
                
            </div>

        </div>

    </div>
    <!-- /block -->
</div>
@endsection