<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VaccineRecordSeeder extends Seeder
{
    public function run()
    {
        DB::table('vaccine_record')->insert([
            ['std_id' => 1, 'vac_id' => 1, 'vaccined_date' => '2022-01-01'],
            ['std_id' => 2, 'vac_id' => 2, 'vaccined_date' => '2022-02-01'],
            // Add more records here
        ]);
    }
}

