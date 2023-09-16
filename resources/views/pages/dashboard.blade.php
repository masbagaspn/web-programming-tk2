@extends('layouts.master')

@section('title')
    Overview
@stop

@section('content')
    @if (sizeof($students))
        <div class="w-full grow p-8 flex gap-4">
            <div class="w-1/3 grid grid-rows-6 gap-4">
                <div class="w-full flex items-center gap-4 border rounded-md p-2">
                    <div class="w-auto h-full aspect-square flex items-center justify-center p-2 bg-blue-50 rounded-md text-blue-700 stroke-2">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            fill="none" 
                            viewBox="0 0 24 24" 
                            stroke-width="2" 
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" 
                            />
                        </svg>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h3 class="text-xs opacity-50">
                            Total Student
                        </h3>
                        <p class="font-medium">{{ count($students) }} Students</p>
                    </div>
                </div>
                @foreach($average_grades as $grade)
                <div class="w-full flex items-center gap-4 border rounded-md p-2">
                    <div class="w-auto h-full aspect-square flex items-center justify-center p-2 bg-blue-50 rounded-md text-blue-700 stroke-2">
                        @switch($grade->grade_name)
                            @case("quiz")
                                <svg xmlns="http://www.w3.org/2000/svg" 
                                    width="24" 
                                    height="24" 
                                    viewBox="0 0 24 24" 
                                    fill="none" 
                                    stroke="currentColor" 
                                    stroke-width="2" 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round" 
                                    class="lucide lucide-lightbulb">
                                        <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"/>
                                        <path d="M9 18h6"/><path d="M10 22h4"/>
                                    </svg>
                                @break
                            @case("attendance")
                                <svg xmlns="http://www.w3.org/2000/svg" 
                                    width="24" 
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none" 
                                    stroke="currentColor" 
                                    stroke-width="2" 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round" 
                                    class="lucide lucide-calendar-check-2"
                                >
                                    <path d="M21 14V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8"/>
                                    <line x1="16" x2="16" y1="2" y2="6"/>
                                    <line x1="8" x2="8" y1="2" y2="6"/>
                                    <line x1="3" x2="21" y1="10" y2="10"/>
                                    <path d="m16 20 2 2 4-4"/>
                                </svg>
                                @break
                            @case("assignment")
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-pencil-ruler"
                                    >
                                    <path d="m15 5 4 4"/>
                                    <path d="M13 7 8.7 2.7a2.41 2.41 0 0 0-3.4 0L2.7 5.3a2.41 2.41 0 0 0 0 3.4L7 13"/>
                                    <path d="m8 6 2-2"/>
                                    <path d="m2 22 5.5-1.5L21.17 6.83a2.82 2.82 0 0 0-4-4L3.5 16.5Z"/>
                                    <path d="m18 16 2-2"/>
                                    <path d="m17 11 4.3 4.3c.94.94.94 2.46 0 3.4l-2.6 2.6c-.94.94-2.46.94-3.4 0L11 17"/>
                                </svg>
                                @break
                            @case("practical")
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-flask-conical"
                                >
                                    <path d="M10 2v7.527a2 2 0 0 1-.211.896L4.72 20.55a1 1 0 0 0 .9 1.45h12.76a1 1 0 0 0 .9-1.45l-5.069-10.127A2 2 0 0 1 14 9.527V2"/>
                                    <path d="M8.5 2h7"/>
                                    <path d="M7 16h10"/>
                                </svg>
                                @break
                            @case("exam")
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-file-text"
                                >
                                    <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/>
                                    <polyline points="14 2 14 8 20 8"/>
                                    <line x1="16" x2="8" y1="13" y2="13"/>
                                    <line x1="16" x2="8" y1="17" y2="17"/>
                                    <line x1="10" x2="8" y1="9" y2="9"/>
                                </svg>
                                @break
                        @endswitch
                    </div>
                    <div class="flex flex-col gap-1">
                        <h3 class="text-xs opacity-50">
                            Average {{ ucfirst($grade->grade_name) }} Score
                        </h3>
                        <p class="font-medium">{{ $grade->grade_average }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="w-full flex flex-col gap-4">
                <div>
                    <h2 class="font-semibold text-blue-600">Grade Chart</h2>
                    <p class="text-xs font-light text-gray-400">Total of grade marks achieved by students.</p>
                </div>
                <canvas id="chart-container" class="w-full grow">
                </canvas>
            </div>
        </div>
    @else
        <x-empty-state />
    @endif
@stop

@section('scripts')
    <script>
        const gradeMarks = @json($grade_marks);
    </script>
     @vite(['resources/js/dashboard.js'])
@stop