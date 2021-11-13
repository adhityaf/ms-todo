<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'name' => 'Belajar Programming',
            ],
            [
                'name' => 'Belajar Desain',
            ],
            [
                'name' => 'Belajar Marketing',
            ]
            ];
            foreach ($category as $key => $value) {
                Category::insert($value);
            }
    }
}
