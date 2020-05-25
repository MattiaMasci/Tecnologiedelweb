@extends('layouts.Backend_layouts.admin_design')

@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a>Collections</a> <a href="{{ url("/admin/edit-collection/$collectionDetails->id") }}" class="current">Edit Collection</a> </div>
            <h1>Collections</h1>
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
                            <h5>Add Collection</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url("/admin/edit-collection/$collectionDetails->id") }}" name="edit_collection" id="edit_collection">
                                @csrf
                                <input value="{{ $collectionDetails->id }}" type="hidden" name="collection_id">
                                <div class="control-group">
                                    <label class="control-label">Name</label>
                                    <div class="controls">
                                        <input value="{{ $collectionDetails->nome }}" type="text" name="collection_name" id="collection_name" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">URL</label>
                                    <div class="controls">
                                        <input value="{{ $collectionDetails->reference }}" type="text" name="collection_url" id="collection_url" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="normal" class="control-label">Enable</label>
                                    <div class="controls">
                                        <select name="enable" id="enable" style="width: 220px;">
                                            <option value="On" @if ($collectionDetails->stato == 1) selected @endif>On</option>
                                            <option value="Off" @if ($collectionDetails->stato == 0) selected @endif>Off</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Image<br>(Size 1920x700)</label>
                                    <div class="controls">
                                        <input type="file" name="MainImage"/>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Edit Collection" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

