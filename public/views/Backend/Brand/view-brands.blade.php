@extends('layouts.Backend_layouts.admin_design')

@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a>Brand</a> <a href="{{ url('/admin/view-brands') }}" class="current">View Brands</a> </div>
            <h1>Brands</h1>
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
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <h5>View Brands</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>Brand Id</th>
                                    <th>Brand Name</th>
                                    <th>Home Main Image</th>
                                    <th>Gender Shown</th>
                                    <th>Status</th>
                                    <th>Photo</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($brands as $brand)
                                    <tr class="gradeX">
                                        <td>{{ $brand->id }}</td>
                                        <td>{{ $brand->nome }}</td>
                                        <td>{{ $brand->top }}</td>
                                        <td>{{ $brand->sesso }}</td>
                                        <td>{{ $brand->stato }}</td>
                                        <td>{{ $brand->foto }}</td>
                                        <td class="center">
                                            <a href="{{ url("/admin/edit-brand/$brand->id") }}" class="btn btn-primary btn-mini" title="Edit Brand">Edit</a>
                                            <a rel="{{$brand->id}}" rel1="delete-brand" href="javascript:" class="btn btn-danger btn-mini deleteRecord" title="Delete Brand">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

