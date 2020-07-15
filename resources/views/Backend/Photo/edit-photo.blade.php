@extends('layouts.Backend_layouts.admin_design')

@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a>Foto</a> <a href="{{ url("/admin/edit-photo/$fotosito->id") }}" class="current">Edit Photo</a> </div>
            <h1>Photo</h1>
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
                            <h5>Edit Photo</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url("/admin/edit-photo/$fotosito->id") }}">
                                @csrf
                                <input type="hidden" name="id_foto" value="{{ $fotosito->id }}">
                                <div class="control-group">
                                    <label class="control-label"><strong>{{$fotosito->pagina}} Page</strong></label>
                                </div>
                                @if($fotosito->pagina == 'Home')
                                <div class="control-group">
                                    <label class="control-label">Link Gender</label>
                                    <div class="controls">
                                        <select name="gender_id" id="gender_id" style="width: 220px;">
                                            {!! $genders_dropdown !!}
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Link Category</label>
                                    <div class="controls">
                                        <select name="category_id" id="category_id" style="width: 220px;">
                                            {!! $categories_dropdown !!}
                                        </select>
                                    </div>
                                </div>
                                @endif
                                <div class="control-group">
                                    <label class="control-label">Image<br>(Size 1920x300)</label>
                                    <div class="controls">
                                        <input type="file" name="data"/>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Edit Photo" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
