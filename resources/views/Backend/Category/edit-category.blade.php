@extends('layouts.Backend_layouts.admin_design')

@section('content')

<div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a>Categories</a> <a href="{{ url("/admin/edit-category/$categoryDetails->id") }}" class="current">Edit Category</a> </div>
            <h1>Categories</h1>
            @if(Session::has('flash_message_error'))
                <div class="alert alert-error alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{!! session('flash_message_error') !!}</strong>
                </div>
            @endif
            @if(Session::has('flash_message_success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{!! session('flash_message_success') !!}</strong>
                </div>
            @endif
        </div>
        <div class="container-fluid"><hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Edit Category</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{ url("/admin/edit-category/$categoryDetails->id") }}" name="edit_category" id="edit_category" novalidate="novalidate">
                                @csrf
                                <input type="hidden" name="category_id" value="{{$categoryDetails->id}}">
                                <div class="control-group">
                                    <label class="control-label">Category Reference</label>
                                    <div class="controls">
                                        <input type="text" name="category_reference" id="category_reference" value="{{ $categoryDetails->reference }}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Category Name</label>
                                    <div class="controls">
                                        <input type="text" name="category_name" id="category_name" value="{{ $categoryDetails->name }}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Under Gender(s)</label>
                                    <div class="controls">
                                        <select name="gender_name[]" id="gender_name" style="width:218px;" multiple>
                                            {!! $gender_select !!}
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea name="description" id="description">{{ $categoryDetails->description }}</textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="normal" class="control-label">Show in Home page</label>
                                    <div class="controls">
                                        <select name="enable" id="enable" style="width: 220px;">
                                            <option value="On" @if ($categoryDetails->stato == 1) selected @endif >On</option>
                                            <option value="Off" @if ($categoryDetails->stato == 0) selected @endif >Off</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Edit Category" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
