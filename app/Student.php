<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends model
{
    protected $fillable = ['name', 'email', 'phone', 'password'];
}