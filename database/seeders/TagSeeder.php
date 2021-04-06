<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'name' => 'Branding'
            ],
            [
                'name' => 'Identity'
            ],
            [
                'name' => 'Video'
            ],
            [
                'name' => 'Design'
            ],
            [
                'name' => 'Inspiration'
            ],
            [
                'name' => 'House'
            ],
            [
                'name' => 'Photography'
            ],
            [
                'name' => 'Car'
            ],
            [
                'name' => 'Travel'
            ],
            [
                'name' => 'Latin'
            ],
        ]);
    }
}
