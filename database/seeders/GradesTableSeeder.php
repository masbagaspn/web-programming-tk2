<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('grades')->insert([
            ['id'=>1,'grade_name'=>'quiz'],
            ['id'=>2,'grade_name'=>'assignment'],
            ['id'=>3,'grade_name'=>'attendance'],
            ['id'=>4,'grade_name'=>'practical',],
            ['id'=>5,'grade_name'=>'exam'],
        ]);
    }
}
