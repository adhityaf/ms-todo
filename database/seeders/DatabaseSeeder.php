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
            UserSeeder::class,
            ColorSeeder::class,
            ListSeeder::class,
            TaskSeeder::class,
            CategorySeeder::class,
            TaskCategorySeeder::class,
            SubtaskSeeder::class,
        ]);
    }
}
