<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses = DB::table('courses')->get();
        return view('user.courses' , compact('courses') );
 }
}
