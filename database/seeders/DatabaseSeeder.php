<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FooterSeeder::class,
            AboutSeeder::class,
            ContactSeeder::class,
            MainSeeder::class,
            ServiceSeeder::class,
            TeamSeeder::class,
            TestimonialSeeder::class,
            LogoSeeder::class,
            MapSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            FonctionSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            SubjectSeeder::class,
            PostSeeder::class,
            PostTagSeeder::class,
            CommentSeeder::class
        ]);
    }
}
