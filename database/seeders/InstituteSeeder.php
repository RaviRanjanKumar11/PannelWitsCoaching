<?php
use Illuminate\Database\Seeder;
use App\Models\Institute;

class InstituteSeeder extends Seeder
{
    public function run()
    {
        Institute::create([
            'name' => 'HIIT Institute',
            'address' => '1234 Learning St, Knowledge City',
            'established' => 2005,
            'total_students' => 1500,
            'male_students' => 800,
            'female_students' => 700,
            'total_courses' => 25,
            'popular_courses' => 'Web Development, Data Science, AI & ML',
        ]);
    }
}

