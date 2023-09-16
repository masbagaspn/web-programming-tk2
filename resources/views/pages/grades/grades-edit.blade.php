@extends('layouts.master')

@section('content')
    <div class="w-full grow flex flex-col">
        <div class="flex flex-col pt-8 px-8 gap-4">
            <h2 class="font-semibold">Student Information</h2>
            <div class="grid grid-cols-3 gap-8">
                <div>
                    <h3 class="font-light text-xs text-gray-400">Student Name</h3>
                    <p class="font-medium">{{ $student->student_name }}</p>
                </div>
                <div>
                    <h3 class="text-xs text-gray-400">Student Number</h3>
                    <p class="font-semibold">{{ $student->student_number }}</p>
                </div>
            </div>
        </div>

        <form action="{{ route('grades.update', $student->id) }}" method="POST" class="w-full grow flex flex-col gap-20 items-between justify-between">
           {{ csrf_field() }}
           @method('PUT')
           <div class="w-full grid grid-cols-3 gap-8 p-8">
                @foreach($student->student_grades as $grade)
                    <div class="input-wrapper">
                        <label class="input-label">{{ ucfirst($grade->grade->grade_name) }} Score</label>
                        <input type="number" name="{{ $grade->id }}" value="{{ $grade->student_grade }}" min="0" max="100" class="appearance-none input-field"/>
                    </div>
                @endforeach
           </div>
           <div class="flex items-center justify-end gap-2 p-8 border-t">
               <a href="/students" type="submit" class="button-neutral">Cancel</a>
               <button type="submit" class="button-primary">Submit</button>
           </div>
        </form>
    </div>
@stop