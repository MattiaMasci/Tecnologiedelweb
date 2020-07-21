@extends('layouts.Backend_layouts.admin_design')

@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a>Brands</a> <a href="{{ url("/admin/edit-brand/$brandDetails->id") }}" class="current">Edit Brand</a> </div>
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
                            <h5>Edit Brand</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url("/admin/edit-brand/$brandDetails->id") }}" name="edit_brand" id="edit_brand">
                                @csrf
                                <input value="{{ $brandDetails->id }}" type="hidden" name="brand_id">
                                <div class="control-group">
                                    <label class="control-label">Name</label>
                                    <div class="controls">
                                        <input value={{ $brandDetails->nome }} type="text" name="brand_name" id="brand_name" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">URL</label>
                                    <div class="controls">
                                        <input value={{ $brandDetails->reference }} type="text" name="brand_url" id="brand_url" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="normal" class="control-label">Enable</label>
                                    <div class="controls">
                                        <select name="enable" id="enable" style="width: 220px;">
                                            <option value="On" @if ($brandDetails->stato == 1) selected @endif>On</option>
                                            <option value="Off" @if ($brandDetails->stato == 0) selected @endif>Off</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="normal" class="control-label">Home Main Image</label>
                                    <div class="controls">
                                        <select name="main" id="main" style="width: 220px;">
                                            <option value="On" @if ($brandDetails->top == 1) selected @endif>Yes</option>
                                            <option value="Off" @if ($brandDetails->top == 0) selected @endif>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="normal" class="control-label">Gender Shown</label>
                                    <div class="controls">
                                        <select name="gender" id="gender" style="width: 220px;">
                                            <option value="Null" @if ($brandDetails->sesso == 'Null') selected @endif>Null</option>
                                            <option value="Uomo" @if ($brandDetails->sesso == 'Uomo') selected @endif>Man</option>
                                            <option value="Donna" @if ($brandDetails->sesso == 'Donna') selected @endif>Woman</option>
                                            <option value="Bambino" @if ($brandDetails->sesso == 'Bambino') selected @endif>Boy</option>
                                            <option value="Bambina" @if ($brandDetails->sesso == 'Bambina') selected @endif>Girl</option>
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
                                    <input type="submit" value="Edit Brand" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


