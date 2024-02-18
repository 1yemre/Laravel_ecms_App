<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class courseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("course")->insert(
           [ 
            [
                'course_title'=>"php",
                'course_content'=>"php kurs içeriği",
                'course_must'=>"php kurs içeriği",
            ],
            [
                'course_title'=>"laravel",
                'course_content'=>"laravel kurs içeriği",
                'course_must'=>"laravel kurs içeriği",
            ],
            [
                'course_title'=>"react",
                'course_content'=>"react kurs içeriği",
                'course_must'=>"react kurs içeriği",
            ],
            [
                'course_title'=>"python",
                'course_content'=>"python kurs içeriği",
                'course_must'=>"python kurs içeriği",
            ]
            
        ]);
    }
}
