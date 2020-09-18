<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'status'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    protected $attributes = [
        'status' => false
    ];
}
