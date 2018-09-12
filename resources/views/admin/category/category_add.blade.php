@extends('admin.dashboard')
@section('content')
<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Caregory</div>
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
                <form class="form-horizontal" action="{{route('category.save')}}" method="post">
                    @csrf
                    <fieldset>
                        <legend>New Category</legend>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Category Name</label>
                            <div class="controls">
                                <input class="form-control{{ $errors->has('category_name') ? ' is-invalid' : '' }}" 
                                       name='category_name' id="focusedInput" type="text" autofocus>
                                
                                @if ($errors->has('category_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="alert alert-danger">{{ $errors->first('category_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

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