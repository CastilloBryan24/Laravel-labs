<?php

namespace Database\Seeders;

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
            [
                'src' => '1.jpg',
                'name' => 'Louise Vandevelde',
                'number' => '555-555-555',
                'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'email' => 'lv@gmail.com',
                'password' => Hash::make("violette"),
                'fonction_id' => 4,
                'role_id' => 2,
                'approved' => true,
            ],
            [
                'src' => '2.jpg',
                'name' => 'Christinne Williams',
                'number' => '555-666-555',
                'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'email' => 'cw@gmail.com',
                'password' => Hash::make("violette"),
                'fonction_id' => 1,
                'role_id' => 1,
                'approved' => true,
            ],
            [
                'src' => '3.jpg',
                'name' => 'Antoine Bouche',
                'number' => '555-777-555',
                'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'email' => 'ab@gmail.com',
                'password' => Hash::make("violette"),
                'fonction_id' => 2,
                'role_id' => 3,
                'approved' => true,
            ],
        ]);
    }
}
