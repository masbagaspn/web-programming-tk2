@extends('layouts.master')

@section('title')
    Edit Student
@stop

@section('content')
 <form action="{{ route('students.update', $data->id) }}" method="POST" class="w-full grow flex flex-col gap-20 items-between justify-between">
    {{ csrf_field() }}
    @method('PUT')
    <div class="w-full grid grid-cols-2 gap-8 p-8">
        <div class="input-wrapper">
            <label class="input-label">Student Name</label>
            <input name="student_name" type="text" class="input-field" value="{{ $data->student_name }}"/>
        </div>
        <div class="input-wrapper">
            <label class="input-label">Student Number</label>
            <input name="student_number" type="text" class="input-field" value="{{ $data->student_number }}" />
        </div>
    </div>
    <div class="flex items-center justify-end gap-2 p-8 border-t">
        <a href="/students" type="submit" class="button-neutral">Cancel</a>
        <button type="submit" class="button-primary">Submit</button>
    </div>
 </form>
@stop