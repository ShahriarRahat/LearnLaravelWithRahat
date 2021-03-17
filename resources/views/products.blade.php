@extends('master')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <h4 class="top mt-10" >Products</h4>
                @if (\Session::has('success'))
                    <div class="alert alert-success"> {!! \Session::get('success') !!} 
                    </div>
                @endif
        </div>
        <div class="col-lg-4">
            <a href="{{url('products/create')}}" class="btn btn-primary float-right btn-sm">Add New Product</a><br><br>
        </div>
            
        {{-- <a href="{{route('products.create')}}" class="btn btn-primary float-right btn-sm">Add New Product</a><br><br> --}}
        <table class="table table-bordered">
            <tr>
            <td><b>ID</b></td>
            <td><b>Name</b></td>
            <td><b>Brand</b></td>
            <td><b>Model</b></td>
            <td><b>Price</b></td>
            <td><b>Stock Condition</b></td>
            <td><b>Stock Unit</b></td>
            <td><b>Product Type</b></td>
            <td><b>Status</b></td>
            <td><b>Action</b></td>
        </tr>
        @foreach ($products as $product)                
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->brand}}</td>
                <td>{{$product->model}}</td>
                <td>{{$product->price}}</td>
                <td>@if ($product->stock==0) Out of Stock @else In Stock @endif</td>
                <td>{{$product->stock_amount}}</td>
                <td>@if ($product->product_type==0) Digital @else Physical @endif</td>
                <td>@if ($product->status==0) Unpublished @else Published @endif</td>
                <td>
                    <a href="{{url('/products/edit',$product->id)}}" class="btn btn-success btn-sm">Edit</a>
                    <a href="{{url('/products/destroy',$product->id)}}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        @endforeach
        </table>
    </div>  
@endsection