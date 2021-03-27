<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            [
                "rights" => "2017 All rights reserved. Designed by",
                "brand" => "Colorlib",
                "link" => "https://colorlib.com"
            ],
        ]);
    }
}
