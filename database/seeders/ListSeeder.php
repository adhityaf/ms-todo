<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Daftar;

class ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            [
                'color_id' => '1',
                'user_id' => '2',
                'name' => 'Belajar',
            ]
            ];
            foreach ($list as $key => $value) {
                Daftar::insert($value);
            }
    }
}
