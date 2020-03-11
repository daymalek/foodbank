@extends('layouts.master')
@section('title','Create Employee')
@section('content')
  <div class="row mt-5">
    <div class="col-sm-8 offset-sm-2">
      <form action="{{ route('employees.register') }}" method = "post">
        @csrf
        <div class="form-group">
          <label for="empName">Name:</label>
          <input type="text" name = "empName" id = "empName" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="empPass">Password:</label>
          <input type="password" name = "empPass" id = "empPass" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="empPhone">Phone Number:</label>
          <input type="text" name = "empPhone" id = "empPhone" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="empEmail">Email:</label>
          <input type="text" name = "empEmail" id = "empEmail" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="role">Role:</label>
          <input type="text" name = "role" id = "role" class="form-control" required>
        </div>
        <button type = "submit" class = "btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection