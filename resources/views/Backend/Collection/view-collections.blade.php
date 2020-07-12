@extends('layouts.Backend_layouts.admin_design')

@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a>Collection</a> <a href="{{ url('/admin/view-collections') }}" class="current">View Collections</a> </div>
            <h1>Collections</h1>
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
                            <h5>View Collections</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>Collection Id</th>
                                    <th>Collection Name</th>
                                    <th>Status</th>
                                    <th>Photo</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($collections as $collection)
                                    <tr class="gradeX">
                                        <td>{{ $collection->id }}</td>
                                        <td>{{ $collection->nome }}</td>
                                        <td>{{ $collection->stato }}</td>
                                        <td>{{ $collection->foto }}</td>
                                        <td class="center">
                                        @if ($collection->id != 1)
                                            <a href="{{ url("/admin/edit-collection/$collection->id") }}" class="btn btn-primary btn-mini" title="Edit Collection">Edit</a>
                                            <a rel="{{$collection->id}}" rel1="delete-collection" href="javascript:" class="btn btn-danger btn-mini deleteRecord" title="Delete Collection">Delete</a>
                                        @endif
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

