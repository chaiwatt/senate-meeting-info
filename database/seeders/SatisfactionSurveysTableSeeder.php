<?php

namespace Database\Seeders;

use App\Models\SatisfactionSurvey;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Monolog\Handler\SamplingHandler;

class SatisfactionSurveysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SatisfactionSurvey::create([
            'name' => 'ตัวอย่างแบบสำรวจความพึงพอใจ'
        ]);
    }
}
