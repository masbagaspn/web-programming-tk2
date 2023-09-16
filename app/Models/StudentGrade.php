<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGrade extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'grade_id',
        'student_grade'
    ];

    public function student() {
        // return $this->belongsTo(Student::class);
        return $this->hasOne(Student::class, 'id', 'student_id');
    }

    public function grade() {
        // return $this->belongsTo(Grade::class);
        return $this->hasOne(Grade::class, 'id', 'grade_id');
    }
}
