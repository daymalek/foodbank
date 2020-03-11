@extends('layouts.master')
@section('title','Login page')
@section('content')
  <div class="row mt-5">
    <div class="col-sm-8 offset-sm-2">
      <form action="{{ route('employees.postLogin') }}" method = "post">
        @csrf
        <div class="form-group">
          <label for="empID">Employee ID:</label>
          <input type="text" name = "empID" id = "empID" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="empPass">Password:</label>
          <input type="password" name = "empPass" id = "empPass" class="form-control" required>
        </div>
        <button type = "submit" class = "btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection