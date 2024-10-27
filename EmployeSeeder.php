<?php

namespace Database\Seeders;
use App\Models\Employe;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employe::truncate();
        $data = [

            [

                'name' => 'subhan',
                'email' => 'subhan@gmail.com',
                'salary' => 120000,
                'dob' => '2008-6-24',
                'password' => 'subhan123',
            ],
            [

            

                'name' => 'ali',
                'email' => 'ali@gmail.com',
                'salary' => 12000,
                'dob' => '2009-8-26',
                'password' => 'ali123',
            
            ]
        ];

        foreach ($data as $value) {
         Employe::create($value);   
        }
    }
}
