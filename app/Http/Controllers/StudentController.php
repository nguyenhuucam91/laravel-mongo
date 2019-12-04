<?php 

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller 
{
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.create', ['student' => new Student()]);
    }

    public function store(Request $request)
    {
        Student::create($request->input());
        return redirect()->action('StudentController@index');
    }

    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $student->update($request->input());
        return redirect()->action('StudentController@index');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->action('StudentController@index');
    }
}