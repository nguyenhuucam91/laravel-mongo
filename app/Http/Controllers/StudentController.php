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
        return view('student.create');
    }

    public function store(Request $request)
    {
        Student::create($request->input());
        return redirect()->action('StudentController@index');
    }
}