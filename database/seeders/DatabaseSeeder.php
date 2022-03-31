<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Idea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        Category::factory(4)->create();
        Idea::factory(30)->create();
    }
}
