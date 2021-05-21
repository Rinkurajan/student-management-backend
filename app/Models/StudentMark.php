<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentMark extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'maths',
        'science',
        'history',
        'term',
        'student_id'
    ];

    public function student()
    {
        return $this->belongsTo(\App\Models\Student::class);
    }
}
