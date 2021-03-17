@extends('master')
@section('content')
    <div class="container">
        <div class="col-lg-8">
            <form>
                <div class="form-group">
                  <label for="name">Email address</label>
                  <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name">                
                </div>
                <div class="form-group">
                  <label for="class">Email address</label>
                  <input type="integer" class="form-control" id="class" aria-describedby="class" placeholder="Enter Class">                
                </div>
                <div class="form-group">
                  <label for="roll">Email address</label>
                  <input type="bigInteger" class="form-control" id="roll" aria-describedby="roll" placeholder="Enter Roll">                
                </div>
                <div class="form-group">
                  <label for="section">Email address</label>
                  <input type="string" class="form-control" id="section" aria-describedby="section" placeholder="Enter Section">                
                </div>
                <div class="form-group">
                  <label for="id_number">Email address</label>
                  <input type="bigInteger" class="form-control" id="id_number" aria-describedby="id_number" placeholder="Enter ID Number">                
                </div>
                <div class="form-group">
                  <label for="mobile_number">Email address</label>
                  <input type="string" class="form-control" id="mobile_number" aria-describedby="mobile_number" placeholder="Enter Mobile Number">                
                </div>
                <div class="form-group">
                  <label for="exam">Exam Attendance</label>
                  <input type="boolean" class="form-control" id="exam" aria-describedby="exam" placeholder="Exam Attended or Not">                
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              
        </div>
    </div>
</div>