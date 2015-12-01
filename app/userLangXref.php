<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userLangXref extends Model
{
    protected $fillable = ['userID', 'langID'];
}
