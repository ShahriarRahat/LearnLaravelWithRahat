@extends('master')
@section('content') 
  <h4>Students Info</h4>
  <div class="container">
    <a class='btn btn-primary float-right mb-2' href="{{route('student.create')}}">Add New Student</a>
      <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Class</td>
                    <td>Roll</td>
                    <td>Section</td>
                    <td>ID Number</td>
                    <td>Mobile Number</td>
                    <td>Exam</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{$student->name}}</td>
                    <td>{{$student->class}}</td>
                    <td>{{$student->roll}}</td>
                    <td>{{$student->section}}</td>
                    <td>{{$student->id_number}}</td>
                    <td>{{$student->mobile_number}}</td>
                    <td>@if ($student->exam==0) Absent @else present @endif</td>
                    <td>
                      <a href="#" class="btn btn-success btn-sm">Edit</a>
                      <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
      </table>
  </div>
@endsection