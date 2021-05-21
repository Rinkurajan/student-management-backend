<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'age',
        'gender',
        'teacher_id'
    ];

    public function teacher()
    {
        return $this->belongsTo(\App\Models\Teacher::class);
    }
}
