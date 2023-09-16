<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Grade;
use App\Models\StudentGrade;
use DB;

class DashboardController extends Controller
{
    public function getData() {
        $students = Student::all();
        $average_grades = DB::table('student_grades as sg')
            ->select('g.grade_name', DB::raw('round(avg(sg.student_grade),2) as grade_average'))
            ->leftJoin('grades as g', 'g.id', '=', 'sg.grade_id')
            ->groupBy('grade_id')
            ->get();
        $grade_marks = array("A" => 0,"B" => 0,"C" => 0,"D" => 0);

        foreach($students as $student){
            if(count($student->student_grades) != 0) {
                $grade_marks[$student->grade_mark()] += 1;
            }
        }
        
        return view("pages.dashboard", [
            "title" => "Overview.", 
            "description" => "Get a comprehensive view of your student data.",
            "students" => $students,
            "average_grades" => $average_grades,
            "grade_marks" => $grade_marks
        ]);
    }
}
