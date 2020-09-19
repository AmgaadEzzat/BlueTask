<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usercourse extends Model
{
    protected $fillable = [
        'user_id', 'course_id'
    ];
}
