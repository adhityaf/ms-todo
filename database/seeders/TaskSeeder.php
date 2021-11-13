<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = [
            [
                'name' => 'Belajar Laravel',
                'list_id' => '1',
                'user_id' => '2',
            ],
            [
                'name' => 'Belajar Node JS',
                'list_id' => '1',
                'user_id' => '2',
            ]
            ];
            foreach ($task as $key => $value) {
                Task::insert($value);
            }
    }
}
