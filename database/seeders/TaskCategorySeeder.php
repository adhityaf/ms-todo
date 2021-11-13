<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TaskCategory;

class TaskCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $taskcategory = [
            [
                'task_id' => '1',
                'category_id' => '1',
            ],
            [
                'task_id' => '1',
                'category_id' => '2',
            ]
            ];
            foreach ($taskcategory as $key => $value) {
                TaskCategory::insert($value);
            }
    }
}
