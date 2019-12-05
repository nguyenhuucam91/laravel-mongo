<?php

namespace App;

use App\Course;
use App\Student;
use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Enrolment extends Moloquent
{
    protected $collection = "enrolments";

    protected $fillable = ['student', 'course', 'mark'];

    public function student()
    {
        return $this->embedsOne(Student::class);
    }

    public function course()
    {
        return $this->embedsOne(Course::class);
    }
}