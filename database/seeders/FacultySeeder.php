<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultySeeder extends Seeder
{
    public function run()
    {
        DB::table('faculty')->insert([
            ['faculty_th' => 'วิทยาศาสตร์', 'faculty_en' => 'Science'],
            ['faculty_th' => 'วิศวกรรมศาสตร์', 'faculty_en' => 'Engineering'],
            // Add more faculties here
        ]);
    }
}