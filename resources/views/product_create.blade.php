@extends('master')
@section('content') 
  <div class="row"> 
    <div class="col-lg-8">
        <h4>Product Entry Form</h4>
        <form action="{{route('products.store')}}" method="POST">
            @csrf 

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="brand">Brand</label>
              <input type="text" name="brand" class="form-control" id="brand" placeholder="Enter Brand">
            </div>
            <div class="form-group">
              <label for="model">model</label>
              <input type="text" name="model" class="form-control" id="model" placeholder="Enter model">
            </div>
            <div class="form-group">
              <label for="price">price</label>
              <input type="number" step="any" min="0" name="price" class="form-control" id="price" placeholder="Enter price">
            </div>
            
            <div class="form-group">
              <label for="stock_amount">stock_amount</label>
              <input type="number" min="0" name="stock_amount" class="form-control" id="stock_amount" placeholder="Enter stock amount">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
  </div>
@endsection