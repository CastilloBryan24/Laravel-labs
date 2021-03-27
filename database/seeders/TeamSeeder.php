<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                "src" => "1.jpg",
                "name" => "Christinne Williams",
                "function" => "Project Manager",
            ],
            [
                "src" => "2.jpg",
                "name" => "Christinne Williams",
                "function" => "Junior developer",
            ],
            [
                "src" => "3.jpg",
                "name" => "Christinne Williams",
                "function" => "Digital designer",
            ],
        ]);
    }
}
