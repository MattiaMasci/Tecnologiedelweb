@extends('layouts.Backend_layouts.admin_design')

@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a>Products</a> <a href="{{ url('/admin/add-product') }}" class="current">Add Product</a> </div>
        <h1>Products</h1>
        @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif
        @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif
        @if($errors->any())
            <div>
                @foreach($errors->all() as $error)
                    <div class="alert alert-error alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $error }}</strong>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    <div class="container-fluid"><hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Add Product</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/add-product') }}" name="add_product" id="add_product" novalidate="novalidate">
                            @csrf
                            <div class="control-group">
                                <label class="control-label">Under Category</label>
                                <div class="controls">
                                    <select name="category_id" id="category_id" style="width: 220px;">
                                        {!! $categories_dropdown !!}
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Under Collection</label>
                                <div class="controls">
                                    <select name="collection_id" id="collection_id" style="width: 220px;">
                                        {!! $collections_dropdown !!}
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Under Brand</label>
                                <div class="controls">
                                    <select name="brand_id" id="brand_id" style="width: 220px;">
                                        {!! $brands_dropdown !!}
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Under Style</label>
                                <div class="controls">
                                    <select name="style_id" id="style_id" style="width: 220px;">
                                        {!! $styles_dropdown !!}
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Product Name</label>
                                <div class="controls">
                                    <input type="text" name="product_name" id="product_name">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Gender</label>
                                <div class="controls">
                                    <select name="gender" id="gender" style="width: 220px;">
                                        <option value='' selected disabled>Select</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Unisex</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Price for Adults</label>
                                <div class="controls">
                                    <div class="input-append">
                                        <input type="text" name="AdultsPrice" id="AdultsPrice" placeholder="Not Available" class="span11">
                                        <span class="add-on">$</span> </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Price for Children</label>
                                <div class="controls">
                                    <div class="input-append">
                                        <input type="text" name="ChildrenPrice" id="ChildrenPrice" placeholder="Not Available" class="span11">
                                        <span class="add-on">$</span> </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Brief Description</label>
                                <div class="controls">
                                    <textarea name="brief_description" id="brief_description"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Description</label>
                                <div class="controls">
                                    <textarea name="description" id="description"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Main Image</label>
                                <div class="controls">
                                    <input type="file" name="MainImage" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Second Image</label>
                                <div class="controls">
                                    <input type="file" name="SecondImage" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Third Image</label>
                                <div class="controls">
                                    <input type="file" name="ThirdImage" />
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Add Product" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
