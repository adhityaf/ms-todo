<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subtask;

class SubtaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subtask = [
            [
                'task_id' => '1',
                'name' => 'Belajar Instalasi',
                'is_complete' => 0,
            ],
            [
                'task_id' => '1',
                'name' => 'Belajar Migrasi',
                'is_complete' => 0,
            ],
            [
                'task_id' => '2',
                'name' => 'Belajar Instalasi',
                'is_complete' => 1,
            ],
            [
                'task_id' => '2',
                'name' => 'Belajar Routing',
                'is_complete' => 0,
            ]
            ];
            foreach ($subtask as $key => $value) {
                Subtask::insert($value);
            }
    }
}
