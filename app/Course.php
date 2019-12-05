<?php 

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Course extends Moloquent 
{
    protected $collection = 'courses';

    protected $fillable = ['name'];
}