<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Usercourse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses = DB::table('courses')->get();
        return view('user.courses' , compact('courses') );
    }

    public function store(Request $request){
        $id = Auth::id();
        $Usercourse = new Usercourse();
        $Usercourse->user_id = $id;
        $Usercourse->course_id = $request->id;
        $Usercourse->save();
        $courses = DB::table('usercourses')
        ->join('courses', function ($join) {
            $id = Auth::id();
            $join->on('usercourses.course_id', '=', 'courses.id')
                 ->where('usercourses.user_id', '=', $id);
        })
        ->get();
        return view('user.enrollcourses' , compact('courses') );
     }

     public function delete(Request $request){
        $id = Auth::id();
        DB::table('usercourses')->where('course_id',  $request->id )->delete();
        $courses = DB::table('usercourses')
        ->join('courses', function ($join) {
            $id = Auth::id();
            $join->on('usercourses.course_id', '=', 'courses.id')
                 ->where('usercourses.user_id', '=', $id);
        })
        ->get();
        return view('user.enrollcourses' , compact('courses') );
     }
}
