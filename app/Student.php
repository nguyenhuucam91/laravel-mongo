<?php 

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Student extends Moloquent 
{
    protected $collection = 'students';

    protected $fillable = ['first_name', 'last_name', 'dob', 'address'];
}