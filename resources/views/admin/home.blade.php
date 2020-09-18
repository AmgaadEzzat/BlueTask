@extends('layouts.app')

@section('content')
<div class="d-flex" id="wrapper" >
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Admin Dashboard </div>
      <div class="list-group list-group-flush">
        <a href="formCourse" class="list-group-item list-group-item-action bg-light">Add Courses</a>
        <a href="allcourses" class="list-group-item list-group-item-action bg-light">Courses</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
</div>
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in! AS Admin') }}
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
@endsection
