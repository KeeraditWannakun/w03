<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    public function run()
    {
        DB::table('program')->insert([
            ['program_th' => 'วิทยาศาสตร์คอมพิวเตอร์', 'program_en' => 'Computer Science', 'grad_year' => 2024, 'prg_fac_id' => 1],
            ['program_th' => 'วิศวกรรมเครื่องกล', 'program_en' => 'Mechanical Engineering', 'grad_year' => 2024, 'prg_fac_id' => 2],
            // Add more programs here
        ]);
    }
}

