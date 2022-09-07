<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'role_id' => 1,
            'email'  => 'admin@gmail.com',
            'number'  => 1020304050,
            'password'  => Hash::make('123456789*'),
            'updated_at' => date("Y-m-d H:i:s"),
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'role_id' => 2,
            'email'  => 'user@gmail.com',
            'number'  => 1020304050,
            'password'  => Hash::make('123456789*'),
            'updated_at' => date("Y-m-d H:i:s"),
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
