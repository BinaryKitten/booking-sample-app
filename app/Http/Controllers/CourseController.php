<?php

namespace App\Http\Controllers;

use App\Model\Course;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function listCourses(): View
    {
        return view('courses/listing')->with('courses', Course::with('teacher')->get());
    }

    public function viewCourse(Course $course): View
    {
        return view('courses/view')->with('course', $course);
    }

    public function enrollOnCourse(Course $course): View
    {
        return view('courses/enroll')->with('course', $course);
    }
}
