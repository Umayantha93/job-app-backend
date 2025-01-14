<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobTypes = [
            ['type' => 'full-time'],
            ['type' => 'part-time'],
            ['type' => 'temporary'],
        ];

        DB::table('job_types')->insert($jobTypes);
    }
}
