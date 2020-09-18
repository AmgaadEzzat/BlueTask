@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Courses Table</h2>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Coursename</th>
        </tr>
      </thead>
      <tbody>
        @foreach($courses as $course)
        <tr>
          <td>{{$course->name}}</td>
          <td><form>
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="switch1">
              <label class="custom-control-label" for="switch1">Enroll course</label>
            </div>
          </form></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
