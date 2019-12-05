<?php 

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller 
{
    public function index()
    {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    public function create()
    {
        return view('course.create', ['course' => new Course()]);
    }

    public function store(Request $request)
    {
        Course::create($request->input());
        return redirect()->action('CourseController@index');
    }

    public function edit(Course $course)
    {
        return view('course.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $course->update($request->input());
        return redirect()->action('CourseController@index');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->action('CourseController@index');
    }
}