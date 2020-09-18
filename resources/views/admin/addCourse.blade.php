@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Course form</h2>
    <form action="addCourse" method="POST">
        @csrf
      <div class="form-group">
        <label for="email">Course Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        @if(session()->has('message'))
         <div class="alert alert-success">
           {{ session()->get('message') }}
        </div>
        @endif
      </div>
      <button type="submit" class="btn btn-primary">Add</button>
    </form>
  </div>
@endsection
