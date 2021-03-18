@extends('master')
@section('content')
    <h2 style="text-align: center">Add New Student</h2>
    <div class="container" style="min-height: 700px">
        <form action="{{route('customer.store')}}" method="POST">
            @csrf
            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter Phone">
            </div>
            <div class="form-group">
            <label for="address">Address</label>
            <input type="textarea" name="address" class="form-control" id="address" placeholder="Enter Adress">
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
            </div>
            <div class="form-group">
            <label for="newsletter">Newsletter Subscription</label>
            <input type="number" name="newsletter" class="form-control" id="newsletter" placeholder="Subscribe Newsletter">
            </div>
            <button type="submit" class="btn btn-primary ml-2">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
</div>
@endsection