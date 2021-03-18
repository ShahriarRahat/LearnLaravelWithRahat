@extends('master')
@section('content')
    <div class="container mt-5" style="min-height: 800px;">
        <div class="col-lg-8">
            <form action="{{route('student.store')}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input type="name" name='name' class="form-control" id="name" aria-describedby="name" placeholder="Enter Name">                
              </div>
              <div class="form-group">
                <label for="class">Class</label>
                <input type="integer" name='class' class="form-control" id="class" aria-describedby="class" placeholder="Enter Class">                
              </div>
              <div class="form-group">
                <label for="roll">Roll</label>
                <input type="bigInteger" name='roll' class="form-control" id="roll" aria-describedby="roll" placeholder="Enter Roll">                
              </div>
              <div class="form-group">
                <label for="section">Section</label>
                <input type="string"name='section' class="form-control" id="section" aria-describedby="section" placeholder="Enter Section">                
              </div>
              <div class="form-group">
                <label for="id_number">ID Number</label>
                <input type="bigInteger" name='id_number' class="form-control" id="id_number" aria-describedby="id_number" placeholder="Enter ID Number">                
              </div>
              <div class="form-group">
                <label for="mobile_number">Mobile Number</label>
                <input type="string" name='mobile_number' class="form-control" id="mobile_number" aria-describedby="mobile_number" placeholder="Enter Mobile Number">                
              </div>
              <div class="form-group">
                <label for="exam">Exam Attendance</label>
                <input type="boolean" name='exam' class="form-control" id="exam" aria-describedby="exam" placeholder="Exam Attended or Not">                
              </div>
              <button type="submit" name='submit' class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection