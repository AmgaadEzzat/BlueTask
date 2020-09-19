@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Courses Table</h2>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Coursename</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($courses as $course)
        <tr>
          <td>{{$course->name}}</td>
          <td><a href='/{{$course->id}}/delete'><button type="button" class="btn btn-primary">Delete</button></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
