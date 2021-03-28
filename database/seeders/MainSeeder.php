<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mains')->insert([
            [
                "title" => "Get in the Lab and discover the world"
            ],
            [
                "title" => "What our clients say"
            ],
            [
                "title" => "Get in the Lab and see the services"
            ],
            [
                "title" => "Get in the Lab and meet the team"
            ],
        ]);
    }
}