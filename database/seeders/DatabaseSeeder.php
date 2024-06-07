<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Candidates;
use App\Models\Department;
use App\Models\IndustryMaster;
use App\Models\FunctionMaster;
use App\Models\QualificationMaster;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $qualification = QualificationMaster::firstOrCreate(
            ['qualification_name'=>'B.Sc.'],
            ['description'=>'Bachelor of Science']
        );

        $industry = IndustryMaster::firstOrCreate(
            ['industry_name' => 'IT'],
            ['description' => 'Information Technology']
        );

        // Seed data into department_masters table or retrieve existing data
        $department = Department::firstOrCreate(
            ['department_name' => 'Engineering'],
            ['description' => 'Engineering Department']
        );

        // Seed data into function_masters table or retrieve existing data
        $function = FunctionMaster::firstOrCreate(
            ['function_name' => 'Software Development'],
            ['description' => 'Software Development']
        );

        for ($i = 0; $i < 10; $i++) {
            Candidates::create([
                'name' => 'Candidate ' . $i,
                'email' => 'candidate' . $i . '@example.com',
                'address' => 'candidate'. $i . 'address',
                'city' => 'candidate'. $i . 'city',
                'district' => 'candidate'. $i . 'district',
                'state' => 'candidate' . $i . 'state',
                'qualification_id' => $qualification->qualification_id,
                'industry_id' => $industry->industry_id,
                'department_id' => $department->department_id,
                'function_id' => $function->function_id,
                'experience' => rand(1, 10), // Random experience between 1 and 10
                'current_salary' => rand(20,30),
                'notice_period' => rand(0,3),
                'Resume' => 'candidate'. $i . 'resume'
            ]);
        }
    }
}
