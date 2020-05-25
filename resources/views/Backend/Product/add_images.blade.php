@extends('layouts.Backend_layouts.admin_design')

@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a>Product Images</a> <a href="{{ url("/admin/add-images/$productDetails->id") }}" class="current">Add Product Images</a> </div>
            <h1>Products Images</h1>
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
                            <h5>Add Product Images</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url("/admin/add-images/$productDetails->id") }}" name="add_images" id="add_images" novalidate="novalidate">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$productDetails->id}}">
                                <div class="control-group">
                                    <label class="control-label">Product Name</label>
                                    <label class="control-label"><strong>{{$productDetails->nome}}</strong></label>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Product Id</label>
                                    <label class="control-label"><strong>{{$productDetails->id}}</strong></label>
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
                                    <input type="submit" value="Add Images" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
