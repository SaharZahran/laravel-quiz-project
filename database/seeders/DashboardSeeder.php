<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('dashboards')->insert([
            ['quiz_name' => 'Solar System',
            'quiz_image' => 'solar.jpg',
            'number_of_questions' => '5',
            'quiz_time' => '1.25'],

            ['quiz_name' => 'Front-end',
            'quiz_image' => 'front-end.jpg',
            'number_of_questions' => '5',
            'quiz_time' => '1.25'],

            ['quiz_name' => 'Geography',
            'quiz_image' => 'geography.jpg',
            'number_of_questions' => '5',
            'quiz_time' => '1.25'],

            ['quiz_name' => 'Human Body',
            'quiz_image' => 'body.jpg',
            'number_of_questions' => '5',
            'quiz_time' => '1.25'],

            ['quiz_name' => 'Information about technology',
            'quiz_image' => 'IT.png',
            'number_of_questions' => '5',
            'quiz_time' => '1.25'],
        ]);
    }
}
