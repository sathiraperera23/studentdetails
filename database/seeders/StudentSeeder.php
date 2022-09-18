<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $students = [
            [
                'name' => 'John',
                'age'=>'20',
                'status' => 'Active',
            ],
            [
                'name' => 'Peter',
                'age'=>'25',
                'status' => 'Active',
            ],
            [
                'name' => 'George',
                'age'=>'30',
                'status' => 'Active',
            ]
            ];
            foreach($students as $student){
                \App\Models\Student::create($student);

            }
    }
}
