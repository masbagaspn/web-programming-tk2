@extends('layouts.master')

@section('title')
    Students
@stop

@section('content')
 <div class="w-full grow flex flex-col justify-between gap-2 py-4 px-8">
    @if(sizeof($data))
    <a href="/students/add" class="button-primary self-end">Add</a>
    <table class="w-full grow flex flex-col border rounded-md overflow-auto">

        <thead class="w-full text-xs font-normal rounded-tl rounded-tr">
            <tr class="w-full flex items-center rounded-tl rounded-tr border-b px-2">
                <th class="w-[22.5%] py-4 text-left pl-2">Student Name</th>
                <th class="w-[12.5%] py-4 text-left pl-2">Student Number</th>
                @foreach($grades as $grade)
                    <th class="w-[10%] py-4">{{ ucfirst($grade) }}</th>
                @endforeach
                <th class="w-[10%] py-4">Grade</th>
            </tr>
        </thead>

        <tbody class="w-full grow grid grid-rows-10 text-xs font-normal">
            @foreach($data->items() as $student)
            <tr class="row-span-1 flex items-center hover:bg-blue-50 transition border-b px-2">
                <td class="w-[22.5%] tb-td-text">{{ $student->student_name }}</td>
                <td class="w-[12.5%] tb-td-text">{{ $student->student_number }}</td>
                
                @forelse($student->student_grades as $grade)
                    <td class="w-[10%] tb-td-score">
                        {{ $grade->student_grade }}
                    </td>
                @empty
                    @foreach($grades as $grade)
                    <td class="w-[10%] tb-td-score">-</td>
                    @endforeach
                @endforelse

                @if(count($student->student_grades) == 0)
                    <td class="w-[10%] tb-td-score">-</td>
                @else
                    <td class="w-[10%] tb-td-score text-blue-600 font-semibold">{{ $student->grade_mark() }}</td>
                @endif

                <!-- action -->
                <td class="relative grow px-2 inline-flex gap-2 justify-end items-center">
                    <button id="btn-student-option-{{ $loop->index }}" class="btn-student-options hover:text-blue-800">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            class="w-3.5 h-3.5 feather feather-more-horizontal pointer-events-none"
                        >
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="19" cy="12" r="1"></circle>
                            <circle cx="5" cy="12" r="1"></circle>
                        </svg>
                    </button>

                    <!-- tooltip -->
                    <nav 
                        id="tooltip-student-{{ $loop->index }}" 
                        class="tooltip-student tooltip"
                    >
                        <a class="tooltip-option" href="/students/{{ $student->id }}/edit">Edit Student</a>
                        @if(count($student->student_grades))
                            <a class="tooltip-option" href="/students/{{ $student->id }}/grades/edit">Edit Grade</a>
                        @else
                            <a class="tooltip-option" href="/students/{{ $student->id }}/grades/add">Add Grade</a>
                        @endif
                        <button data-id="{{ $student->id }}" class="text-left tooltip-option tooltip-option-delete">Delete</button>
                    </nav>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="w-full flex justify-end">
        {{ $data->links('vendor.pagination.custom') }}
    </div>
    @else
    <x-empty-state />
    @endif
 </div>
@stop

@section('dialogs')
    <x-delete-dialog />
@stop

@section('scripts')
    @vite(['resources/js/student.js'])
@stop
