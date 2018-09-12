@extends('admin.dashboard')
@section('content')
<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <?php
        $category = DB::table('category')->paginate(7);
        ?>
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">category Table</div>
            <a href="{{route('category.add')}}" class=" btn btn-primary pull-right">New category</a>
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
                            <th>Category Name</th>
                            <th>Publication Status</th>
                            <th>Action</th>  
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $category as $categoryall)
                        <tr class="gradeU">
                            <td class="center"> {{$categoryall->id}}.</td>
                            <td class="center">{{$categoryall->category_name}}</td>
                            <td class="center">
                                <?php if ($categoryall->publication_Status == 1) { ?>
                                    <div class="label label-success">
                                        Active
                                    </div>
                                <?php } else { ?>
                                    <div class="label label-danger">
                                        Inactive
                                    </div>
                                <?php } ?>

                            </td>
                            <td class="center">
                                <?php if ($categoryall->publication_Status == 1) { ?>
                                    <a href="{{url('/admin/phone-category/unpublish/'.$categoryall->id)}}" class="btn btn-primary" title="Deactive">
                                        <i class="icon-thumbs-down icon-white"></i>
                                    </a>
                                <?php } else { ?>
                                    <a href="{{url('/admin/phone-category/publish/'.$categoryall->id)}}" class="btn btn-primary" title="Active">
                                        <i class="icon-thumbs-up icon-white"></i>
                                    </a>
                                <?php } ?>

                                <a href="{{url('/admin/phone-category/delete/'.$categoryall->id)}}" class="btn btn-danger" title="Delete">
                                    <i class="icon-remove icon-white"></i>
                                </a>

                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div>
                {{$category->links()}}
            </div>
            
        </div>

    </div>
    <!-- /block -->
</div>
@endsection