<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'grade_name',
    ];

    public function student_grades() {
        // return $this->belongsToMany(Student::class, 'student_grade', 'grade_id', 'student_id')
        //     ->withPivot('student_grade');
        return $this->hasMany(StudentGrade::class);
    }
}
