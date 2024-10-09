<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            ['title' => 'learn laravel', 'description' => 'complete the laravel course', 'project_id' => 3],
            ['title' => 'Build Task Manager', 'description' => 'Create a task management application using Laravel', 'project_id' => 3],
            ['title' => 'Test Application', 'description' => 'Write tests for the application', 'project_id' => 3],
        ]);
    }
}
