<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $color = [
            [
                'name' => 'Hijau',
            ],
            [
                'name' => 'Kuning',
            ],
            [
                'name' => 'Merah',
            ]
            ];
            foreach ($color as $key => $value) {
                Color::insert($value);
            }
    }
}
