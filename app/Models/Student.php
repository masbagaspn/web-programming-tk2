<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'student_name',
        'student_number'
    ];

    public function student_grades() {
        // return $this->belongsToMany(Grade::class, 'student_grade', 'student_id', 'grade_id')
        //     ->withPivot('student_grade');
        return $this->hasMany(StudentGrade::class);
    }

    public function calculate_grade(){
        $calculated_grade = 0;

        foreach($this->student_grades as $grade){
            $id = $grade->grade_id;
            $score = $grade->student_grade;
            
            switch($id){
                case 1:
                    $calculated_grade += ($score * 0.1);
                    break;
                case 2:
                    $calculated_grade += ($score * 0.4);
                    break;
                case 3:
                    $calculated_grade += ($score * 0.1);
                    break;
                case 4:
                    $calculated_grade += ($score * 0.1);
                    break;
                case 5:
                    $calculated_grade += ($score * 0.3);
                    break;
            }
        }

        return $calculated_grade;
    }

    public function grade_mark() {
        $grade = $this->calculate_grade();

        switch(true){
            case ($grade <= 65):
                return "D";
                break;
            case ($grade > 65 && $grade <= 75):
                return "C";
                break;
            case ($grade > 75 && $grade <= 85):
                return "B";
                break;
            case ($grade > 85 && $grade <= 100):
                return "A";
                break;
        }
    }

    public static function boot() {
        parent::boot();
        self::deleting(function($student){
            $student->student_grades()->each(function($student_grades){
                $student_grades->delete();
            });
        });
    }
}
