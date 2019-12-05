<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('students', 'StudentController');
Route::resource('courses', 'CourseController');
Route::resource('enrolments', 'EnrolmentController');
// Route::get('enrolments/create', function() {
//     $enrolment = new App\Enrolment();
//     //store embeded single object in enrolment
//     // $enrolment->user = ['name' => 'camnh'];
//     //store embedded array in enrolment
//     $enrolment->user = [['name' => 'camnh'], ['name' => 'abc']];
//     //store multiple objects in array in single document
//     $enrolment->course = ['name' => 'bc'];
//     $enrolment->mark = 9;
//     $enrolment->save();
// });

// Route::get('/enrolments/1', function() {
//     $enrolment = App\Enrolment::all()->first();
//     return $enrolment;
// });