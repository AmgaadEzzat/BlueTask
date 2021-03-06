@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Courses Table</h2>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Coursename</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($courses as $course)
        <tr>
          <td>{{$course->name}}</td>
          <td><form method="post" action="/{{$course->id}}/enroll">
               @csrf
              <a href='/{{$course->id}}/enroll'><button type="submit" class="btn btn-primary">Enroll</button></a></form></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
