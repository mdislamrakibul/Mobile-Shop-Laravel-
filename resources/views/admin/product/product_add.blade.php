@extends('admin.dashboard')
@section('content')
<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Product</div>
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
                <form class="form-horizontal" action="{{route('product.save')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <legend>New Product</legend>
                        <!--#########################  NAMe-->
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Product Name</label>
                            <div class="controls">
                                <input class="form-control{{ $errors->has('product_name') ? ' is-invalid' : '' }}" 
                                       name='product_name' id="focusedInput" type="text" autofocus>

                                @if ($errors->has('product_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="alert alert-danger">{{ $errors->first('product_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!--########################### Brand-->
                        <div class="control-group">
                            <label class="control-label" for="selectError">Product Brand</label>
                            <div class="controls">
                                <select class="form-control{{ $errors->has('product_category') ? ' is-invalid' : '' }}" 
                                        name='product_category' autofocus>
                                    <option value="0">-- Select Brand --</option>
                                    <?php
                                    $category = DB::table('category')->get();
                                    foreach ($category as $category) {
                                        ?>
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    <?php } ?>
                                </select>
                                @if ($errors->has('product_category'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="alert alert-danger">{{ $errors->first('product_category') }}</strong>
                                </span>
                                @endif

                            </div>
                        </div>
                        <!--######################################## Description-->
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Product Description</label>
                            <div class="controls">
                                <textarea class="form-control{{ $errors->has('product_description') ? ' is-invalid' : '' }}" 
                                          name='product_description' rows="4" autofocus>

                                </textarea>

                                @if ($errors->has('product_description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="alert alert-danger">{{ $errors->first('product_description') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!--####################################  color-->
                        <div class="control-group">
                            <label class="control-label" for="selectError">Product Color</label>
                            <div class="controls">
                                <select class="form-control{{ $errors->has('product_color') ? ' is-invalid' : '' }}" 
                                        name='product_color' autofocus>
                                    <option value="0">-- Select Color --</option>
                                    <?php
                                    $color = DB::table('color')->get();
                                    foreach ($color as $color) {
                                    ?>
                                    <option value="{{$color->id}}">{{$color->color_name}}</option>
                                    <?php } ?>
                                </select>
                                @if ($errors->has('product_color'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="alert alert-danger">{{ $errors->first('product_color') }}</strong>
                                </span>
                                @endif

                            </div>
                        </div>
                        <!--#################################### Price-->
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Product Price (Tk.)</label>
                            <div class="controls">
                                <input class="form-control{{ $errors->has('product_price') ? ' is-invalid' : '' }}" 
                                       name='product_price' id="focusedInput" type="text" autofocus>

                                @if ($errors->has('product_price'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="alert alert-danger">{{ $errors->first('product_price') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!--##################################### Image-->
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Product Image</label>
                            <div class="controls">
                                <input class="input-file uniform_on{{ $errors->has('product_image') ? ' is-invalid' : '' }}" 
                                       id="fileInput" type="file" name="product_image">
                                @if ($errors->has('product_image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="alert alert-danger">{{ $errors->first('product_image') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!--################################# publication--> 
                        <div class="control-group">
                            <label class="control-label" for="selectError">Publication Status</label>
                            <div class="controls">
                                <select class="form-control{{ $errors->has('publication_Status') ? ' is-invalid' : '' }}" 
                                        name='publication_Status' autofocus>
                                    <option value="2">-- Select Option --</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>

                                </select>
                                @if ($errors->has('publication_Status'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="alert alert-danger">{{ $errors->first('publication_Status') }}</strong>
                                </span>
                                @endif

                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
    </div>
    <!-- /block -->
</div>
@endsection