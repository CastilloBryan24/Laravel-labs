<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'name' => 'Louis Montier',
                'mail' => 'lm@gmail.com',
                'message' => 'Lorem ipsu juke mdlp kjhg',
                'post_id' => 4,
                'approved' => true,
            ],
            [
                'name' => 'Jean Konstantin',
                'mail' => 'jk@gmail.com',
                'message' => 'Lorem ipsu juke mdlp kjhg',
                'post_id' => 4,
                'approved' => true,
            ],
            [
                'name' => 'Sam Duches',
                'mail' => 'sm@gmail.com',
                'message' => 'Lorem ipsu juke mdlp kjhg',
                'post_id' => 3,
                'approved' => true,
            ],
            [
                'name' => 'Julia Cash',
                'mail' => 'jl@gmail.com',
                'message' => 'Lorem ipsu juke mdlp kjhg',
                'post_id' => 2,
                'approved' => true,
            ],
            [
                'name' => 'Sophie Vittel',
                'mail' => 'sv@gmail.com',
                'message' => 'Lorem ipsu juke mdlp kjhg',
                'post_id' => 2,
                'approved' => true,
            ],
            [
                'name' => 'Marc Thibaut',
                'mail' => 'mt@gmail.com',
                'message' => 'Lorem ipsu juke mdlp kjhg',
                'post_id' => 2,
                'approved' => true,
            ],
        ]);
    }
}
