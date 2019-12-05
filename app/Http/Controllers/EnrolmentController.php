<?php

namespace App\Http\Controllers;

use App\Course;
use App\Enrolment;
use App\Student;
use Illuminate\Http\Request;

class EnrolmentController extends Controller 
{
    public function index()
    {
        $enrolments = Enrolment::all();
        return view('enrolment.index', compact('enrolments'));
    }

    public function create()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('enrolment.create', compact('students', 'courses'));
    }

    public function store(Request $request)
    {
        $student = Student::find($request->input('student_id'));
        $course = Course::find($request->input('course_id'));
        Enrolment::create([
            'student'=>$student->getAttributes(), //this will return array after save.
            'course' => $course->getAttributes(),
            'mark' => $request->input('mark')
        ]);
        return redirect()->action('EnrolmentController@index');
    }

    public function edit(Enrolment $enrolment)
    {
        $students = Student::all();
        $courses = Course::all();
        return view('enrolment.edit', compact('enrolment', 'students', 'courses'));
    }

    public function update(Request $request, Enrolment $enrolment)
    {
        $student = Student::find($request->input('student_id'));
        $course = Course::find($request->input('course_id'));
        $enrolment->update([
            'student'=>$student->getAttributes(), //this will return array after save.
            'course' => $course->getAttributes(),
            'mark' => $request->input('mark')
        ]);
        return redirect()->action('EnrolmentController@index');
    }
}