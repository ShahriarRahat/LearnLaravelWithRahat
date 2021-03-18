@extends('master')
@section('content')
    <div class="container">
        <h2 style="align-content: center">Edit Customer Info</h2>
        <div class="col-sm-8">
            <form action="{{route('customer.update')}}" method="POST">
                @csrf
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="{{$customer->name}}">
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" value="{{$customer->email}}">
                </div>
                <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter Phone" value="{{$customer->phone}}">
                </div>
                <div class="form-group">
                <label for="address">Address</label>
                <input type="textarea" name="address" class="form-control" id="address" placeholder="Enter Adress" value="{{$customer->address}}">
                </div>
                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" value="{{$customer->password}}">
                </div>
                <div class="form-group">
                <label for="newsletter">Newsletter Subscription</label>
                <input type="number" name="newsletter" class="form-control" id="newsletter" placeholder="Subscribe Newsletter" value="{{$customer->newsletter}}">
                </div>
                <button type="submit" class="btn btn-primary ml-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </form>
        </div>
    </div>
@endsection