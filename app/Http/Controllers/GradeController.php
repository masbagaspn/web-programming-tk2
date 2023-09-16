<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Student;
use App\Models\StudentGrade;

class GradeController extends Controller
{
    //
    public function add($student_id){
        $student = Student::findOrFail($student_id);
        $grades = Grade::all();

        return view('pages.grades.grades-add', [
            'title' => 'Add Grades',
            'description' => "Fill in your student's grade detail.",
            'student' => $student,
            'grades' => $grades
        ]);
    }

    public function edit($student_id){
        $student = Student::with('student_grades', 'student_grades.grade')->findOrFail($student_id);
        
        return view('pages.grades.grades-edit', [
            'title' => 'Edit Grades',
            'description' => "Edit your student's grade detail.",
            'student' => $student
        ]);
    }

    public function create(Request $req, $student_id) {
        $grades = Grade::all();
        
        foreach($grades as $grade){
            $student_grade = new StudentGrade();
            $student_grade->student_id = $student_id;
            $student_grade->grade_id = $grade->id;
            $student_grade->student_grade = $req[$grade->id];

            $student_grade->save();
        }

        return redirect('/students')->with('success', 'Grade registered succesfully!');
    }

    public function update(Request $req, $student_id) {
        $student = Student::with('student_grades')->findOrFail($student_id);

        foreach($student->student_grades as $grade){
            $new_grade = StudentGrade::findOrFail($grade->id);
            $new_grade->student_grade = $req[$grade->id];
            
            $new_grade->save();
        }

        return redirect('/students')->with('success', 'Grade updated succesfully!');
    }
}
