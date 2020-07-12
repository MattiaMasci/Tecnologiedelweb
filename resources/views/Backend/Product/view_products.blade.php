@extends('layouts.Backend_layouts.admin_design')

@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a>Product</a> <a href="{{ url('/admin/view-products') }}" class="current">View Products</a> </div>
            <h1>Products</h1>
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
                            <h5>View Products</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>Product Id</th>
                                    <!-- <th>Category Id</th> -->
                                    <th>Category Name</th>
                                    <!-- <th>Collection Id</th> -->
                                    <th>Collection Name</th>
                                    <!-- <th>Brand Id</th> -->
                                    <th>Brand Name</th>
                                    <!-- <th>Style Id</th> -->
                                    <th>Style Name</th>
                                    <th>Product Name</th>
                                    <th>Main Image</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($products as $product)
                                    <tr class="gradeX">
                                        <td>{{ $product->id }}</td>
                                        <!-- <td>{{ $product->categoria_id }}</td> -->
                                        <td>{{ $product->categoria_nome }}</td>
                                        <!-- <td>{{ $product->collezione_id }}</td> -->
                                        <td>{{ $product->collezione_nome }}</td>
                                        <!-- <td>{{ $product->marca_id }}</td> -->
                                        <td>{{ $product->marca_nome }}</td>
                                        <!-- <td>{{ $product->stile_id }}</td> -->
                                        <td>{{ $product->stile_nome }}</td>
                                        <td>{{ $product->nome }}</td>
                                        <td>@if(!empty($product->photo))<img src="../store-image/fetch-image/{{$product->photo}}" style="width:60px;">@endif</td>
                                        <td class="center">
                                            <a href="{{ url("/admin/edit-product/$product->id") }}" class="btn btn-primary btn-mini">Edit</a>
                                            <a href="#myModal{{ $product->id }}" data-toggle="modal" class="btn btn-success btn-mini">View</a>
                                            <a href="{{ url("/admin/add-pieces/$product->id") }}" class="btn btn-success btn-mini">Add</a>
                                            <a rel="{{$product->id}}" rel1="delete-product" href="javascript:" class="btn btn-danger btn-mini deleteRecord">Delete</a>
                                        </td>
                                    </tr>

                                        <div id="myModal{{ $product->id }}" class="modal hide">
                                            <div class="modal-header">
                                                <button data-dismiss="modal" class="close" type="button">×</button>
                                                <h3>{{ $product->nome }} Full Details</h3>
                                            </div>
                                            <div class="modal-body">
                                                <p>Product ID: {{ $product->id }}</p>
                                                <p>Category ID: {{ $product->categoria_id }}</p>
                                                <p>Collection ID: {{ $product->collezione_id }}</p>
                                                <p>Brand ID: {{ $product->marca_id }}</p>
                                                <p>Style ID: {{ $product->stile_id }}</p>
                                                <p>Product Name: {{ $product->nome }}</p>
                                                <p>Date: {{ $product->datauscita }}</p>
                                                <p>Description: {{ $product->descrizione }}</p>
                                                <p>[...]</p>
                                            </div>
                                        </div>

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
