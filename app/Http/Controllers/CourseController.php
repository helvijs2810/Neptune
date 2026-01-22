<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


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

    public function update(){

    }

    public function delete(){

    }
}
