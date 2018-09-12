@extends('admin.dashboard')
@section('content')
<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <?php
        $product = DB::table('product')
                ->orderBy('id', 'desc')
                ->paginate(7);
        ?>
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Product Table</div>
            <a href="{{route('product.add')}}" class=" btn btn-primary pull-right">New Product</a>
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
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Product Price (Tk.)</th>
                            <th>Publication Status</th>
                            <th>Action</th>  
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $product as $productall )
                        <tr class="gradeU">
                            <td class="center"> {{$productall->id}} </td>
                            <td class="center">{{$productall->product_name}}</td>
                            <td class="center">Tk. {{$productall->product_price}}</td>
                            <td class="center">
                                @if($productall->publication_Status == 1)
                                <div class="label label-success">
                                    Active
                                </div>
                                @else
                                <div class="label label-danger">
                                    Inactive
                                </div>
                                @endif

                            </td>
                            <td class="center">
                               @if($productall->publication_Status == 1)
                                    <a href="{{url('/admin/product/unpublish/'.$productall->id)}}" class="btn btn-warning" title="Deactice">
                                        <i class="icon-thumbs-down icon-white"></i>
                                    </a>
                                @else
                                    <a href="{{url('/admin/product/publish/'.$productall->id)}}" class="btn btn-success" title="Actice">
                                        <i class="icon-thumbs-up icon-white"></i>
                                    </a>
                                 @endif

                                <a href="{{url('/admin/product/view/'.$productall->id)}}" class="btn btn-primary" title="View">
                                    <i class="icon-eye-open icon-white"></i>
                                </a>
                                <a href="{{url('/admin/product/delete/'.$productall->id)}}" class="btn btn-danger" title="Delete">
                                    <i class="icon-remove icon-white"></i>
                                </a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div>
                {{$product->links()}}
            </div>

        </div>

    </div>
    <!-- /block -->
</div>
@endsection