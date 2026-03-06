<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index(){

        $courses = Course::orderBy('title')->paginate(6);

        return view('courses.index', [
            'courses' => $courses
        ]);
    }

    public function show(Course $course){
        return view('courses.show', ['course' => $course]);
    }

    public function create(){

    }

    public function store(){

    }

    public function edit(){

    }

    public function update(Course $course){
        if(Auth::user()->account_type === 'student'){
            if($course->users()->find(Auth::user()->id)){
                $course->users()->detach(Auth::user()->id);
            } else {
                $course->users()->attach(Auth::user()->id, ['approved' => false]);
            }
            return redirect('/dashboard');
        }
    }

    public function delete(){
    }
}
