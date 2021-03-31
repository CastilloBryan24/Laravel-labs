<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",

                "src" => "01.jpg",
                "name" => "David Lopez",
                "function" => "CEO Company",
            ],
            [
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",

                "src" => "02.jpg",
                "name" => "Déborah Santos",
                "function" => "CEO Company",
            ],
            [
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",

                "src" => "01.jpg",
                "name" => "Benjamin Williams",
                "function" => "CEO Company",
            ],
            [
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",

                "src" => "02.jpg",
                "name" => "Mathilde Lion",
                "function" => "CEO Company",
            ],
            [
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",

                "src" => "01.jpg",
                "name" => "George Clin",
                "function" => "CEO Company",
            ],
            [
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",

                "src" => "02.jpg",
                "name" => "Elena Solis",
                "function" => "CEO Company",
            ],
            [
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",

                "src" => "01.jpg",
                "name" => "Alexis Leclerc",
                "function" => "CEO Company",
            ],
        ]);
    }
}
