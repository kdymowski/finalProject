<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;
<<<<<<< HEAD
    public $timestamps = false;
    protected $fillable = ['firstname','lastname ','type', 'language1','language2','language2','teamStyle1','teamStyle2 ','teamStyle3','password', 'email'];
=======

    protected $fillable = ['firstName','lastName', 'language', 'class', 'bio','teamStyle','password', 'email'];
>>>>>>> a31a7095fee6b1b609f76cb848993f1e8ba1ba58


}
