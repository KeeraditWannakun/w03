<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VaccineSeeder extends Seeder
{
    public function run()
    {
        DB::table('vaccine')->insert([
            ['vaccine' => 'Pfizer'],
            ['vaccine' => 'Moderna'],
            // Add more vaccines here
        ]);
    }
}
