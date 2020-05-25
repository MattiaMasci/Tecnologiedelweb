@extends('layouts.Backend_layouts.admin_design')

@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a>Brands</a> <a href="{{ url('/admin/add-brand') }}" class="current">Add Brand</a> </div>
            <h1>Brands</h1>
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
                            <h5>Add Brand</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/add-brand') }}" name="add_brand" id="add_brand">
                                @csrf
                                <div class="control-group">
                                    <label class="control-label">Name</label>
                                    <div class="controls">
                                        <input type="text" name="brand_name" id="brand_name" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">URL</label>
                                    <div class="controls">
                                        <input type="text" name="brand_url" id="brand_url" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="normal" class="control-label">Enable</label>
                                    <div class="controls">
                                        <select name="enable" id="enable" style="width: 220px;">
                                            <option value="On">On</option>
                                            <option value="Off">Off</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="normal" class="control-label">Home Main Image</label>
                                    <div class="controls">
                                        <select name="main" id="main" style="width: 220px;">
                                            <option value="On">Yes</option>
                                            <option value="Off">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="normal" class="control-label">Gender Shown</label>
                                    <div class="controls">
                                        <select name="gender" id="gender" style="width: 220px;">
                                            <option value="Null">Null</option>
                                            <option value="Uomo">Man</option>
                                            <option value="Donna">Woman</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Image<br>(Size 450x450)</label>
                                    <div class="controls">
                                        <input type="file" name="MainImage"/>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Add Brand" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


