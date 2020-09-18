<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Course;

class CourseController extends Controller
{
    public function show(){
        return view('admin.addCourse');
 }

 public function index(){
    $courses = DB::table('courses')->get();
    return view('admin.courses' , compact('courses') );
}
 public function store(Request $request){
    $course = new Course;
    $course->name = $request->name;
    $course->save();
    return redirect()->back()->with('message', 'IT ADDED!');
 }

 public function delete(Course $id){
    $id->delete();
    return back();
 }
}
