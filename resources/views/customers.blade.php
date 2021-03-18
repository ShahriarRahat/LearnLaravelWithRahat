@extends('master')
@section('content')
    <div class="container-fluid">
        <h1 style="text-align:center; margin-bottom: 10px;">Customer Information</h1>
        <a href="{{route('customer.create')}}" class="btn float-right btn-primary btn-sm mb-2">Add New Customer</a>
        <table class="table table-bordered table-striped">
            <thead>
                <td class="text-center"><b>ID</b></td>
                <td class="text-center"><b>Name</b></td>
                <td class="text-center"><b>Email</b></td>
                <td class="text-center"><b>Phone</b></td>
                <td class="text-center"><b>Adress</b></td>
                <td class="text-center"><b>Password</b></td>
                <td class="text-center"><b>Newsletter</b></td>
                <td class="text-center"><b>Action</b></td>
            </thead>
            @foreach ($customers as $customer)
            <tbody>
                <td>{{$customer->id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->password}}</td>
                <td>@if($customer->newsletter==0) Not Subscribed @else Subscribed @endif</td>
                <td>
                    <a href="{{url('customers/edit',$customer->id)}}" class="btn btn-success btn-sm">Edit</a>
                    <a href="{{url('customer/delete',$customer->id)}}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tbody>   
            @endforeach
        </table>
    </div>
@endsection