<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class seekerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seeker')->insert([
        [
            'firstname'=> 'Ankit',
            'lastname'=> 'Sharma',
            'gender'=> 'male',
            'dob'=> '12/11/2002',
            'education'=> 'Matric - 10th Pass',
            'experience'=> 'Fresher (Unskilled)',
            'city'=> 'Delhi',
            'mobile'=>'1212121212',
            'password'=>Hash::make('123456'),
            'confirm_password'=>Hash::make('123456')
        ],
        [
            'firstname'=> 'Sameer',
            'lastname'=> 'Mohammad',
            'gender'=> 'male',
            'dob'=> '05/03/2001',
            'education'=> 'Matric - 10th Pass',
            'experience'=> 'Fresher (Unskilled)',
            'city'=> 'Delhi',
            'mobile'=>'7876165395',
            'password'=>Hash::make('123456'),
            'confirm_password'=>Hash::make('123456')
        ]
        
    ]);
    }
}
