<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $fillable = [
        'cast',
        'kiboubi',
        'name',
        'email',
        'tel',
        'course',
        'basyo',
        'ekimei',
        'contacts',
        'time',
    ];
}
