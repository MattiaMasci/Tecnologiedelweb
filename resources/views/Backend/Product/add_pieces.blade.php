@extends('layouts.Backend_layouts.admin_design')

@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a>Products</a> <a href="{{ url("/admin/add-pieces/$productDetails->id") }}" class="current">Add Product Pieces</a> </div>
            <h1>Product Pieces</h1>
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
                            <h5>Add Product Pieces</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url("/admin/add-pieces/$productDetails->id") }}" name="add_pieces" id="add_pieces" novalidate="novalidate">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$productDetails->id}}">
                                <input type="hidden" id="forcategory_id" value="{{$productDetails->categoria_id}}">
                                <div class="control-group">
                                    <label class="control-label">Product Name</label>
                                    <label class="control-label"><strong>{{$productDetails->nome}}</strong></label>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Product Id</label>
                                    <label class="control-label"><strong>{{$productDetails->id}}</strong></label>
                                </div>
                                <div class="control-group">
                                    <label class="control-label"  style="width:130px;"></label>
                                    <label class="control-label"  style="width:130px;">Under Size</label>
                                    <label class="control-label"  style="width:130px;">Under Color</label>
                                    <label class="control-label"  style="width:130px;">Quantity</label>
                                </div>
                                <div class="control-group">
                                    <label class="control-label"></label>
                                    <div class="field_wrapper">
                                        <div>
                                            <select name="size[]" id="size" style="width:120px;">{!! $sizes_dropdown !!}</select>
                                            <select name="color[]" id="color" style="width:120px;">{!! $colors_dropdown !!}</select>
                                            <select name="quantity[]" id="quantity" style="width: 120px;"></select>
                                            <a href="javascript:void(0);" class="add_button" title="Add field">Add</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Add Pieces" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <h5>View Attributes</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>Attribute Id</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>Stock</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $i = 0; @endphp
                                @foreach ($stock as $quantity)
                                    <tr class="gradeX">
                                        <td>{{ $quantity->id }}</td>
                                        <td>{{ $size_name[$i] }}</td>
                                        <td>{{ $color_name[$i] }}</td>
                                        <td>{{ $quantity->quantita }}</td>
                                        <td class="center">
                                            <a rel="{{$quantity->id}}" rel1="delete-pieces" href="javascript:" class="btn btn-danger btn-mini deleteRecord">Delete</a>
                                        </td>
                                    </tr>
                                @php $i=$i+1; @endphp
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
