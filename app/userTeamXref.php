<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userTeamXref extends Model
{
    protected $fillable = ['userID', 'teamID'];
}
