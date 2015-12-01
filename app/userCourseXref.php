<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userCourseXref extends Model
{
    protected $fillable = ['userID','courseID'];

}
