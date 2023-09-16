<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Grade;
use DB;

class StudentController extends Controller
{
    public function get(){
        $data = Student::with('student_grades')->paginate(10);
        $grades = Grade::all()->pluck('grade_name');
        
        return view('pages.students.students', [
            "title" => "Students.", 
            "description" => "Organize your student data efficiently.",    
            "data" => $data,
            "grades" => $grades,
        ]);
    }

    public function add(){
        return view('pages.students.students-add', [
            "title" => "Add Student", 
            "description" => "Fill in your student detail information."
        ]);
    }

    public function edit(Request $req, $id){
        $data = Student::findOrFail($id);

        return view('pages.students.students-edit', [
            "title" => "Edit Student", 
            "description" => "Edit your student detail information.",
            "data" => $data
        ]);
    }

    public function create(Request $req) {
        $student_name = $req->student_name;
        $student_number = $req->student_number;

        $student = new Student();

        $student->student_name = $student_name;
        $student->student_number = $student_number;

        $student->save();

        return redirect('/students')->with('success', 'Student registered successfully!');
    }

    public function update(Request $req, $id){
        $req->validate([
            'student_name' => 'required',
            'student_number' => 'required'
        ]);
        $student = Student::findOrFail($id);
        
        $student->student_name = $req->student_name;
        $student->student_number = $req->student_number;

        $student->save();

        return redirect('/students')->with('success', 'Student updated successfully!');
    }

    public function delete($id){
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/students')->with('success', 'Student deleted successfully!');
    }
}
