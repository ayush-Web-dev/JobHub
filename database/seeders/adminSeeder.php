<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            [
                'name'=> 'Admin',
                'email'=> 'admin@jobhub.com',
                'mobileno'=>'7876178761',
                'password'=>Hash::make('Admin@123'),
                'cpassword'=>Hash::make('Admin@123')
            ]
        ]);
    }
}
