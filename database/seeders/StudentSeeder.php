<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run()
    {
        DB::table('student')->insert([
            ['sid' => 'S001', 'fname' => 'Somchai', 'lname' => 'Jaidee', 'std_prg_id' => 1],
            ['sid' => 'S002', 'fname' => 'Somsak', 'lname' => 'Deeja', 'std_prg_id' => 2],
            // Add more students here
        ]);
    }
}

