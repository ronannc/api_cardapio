<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CategoryItemMenu;
use Illuminate\Database\Seeder;

class CategoryItemMenuSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        CategoryItemMenu::factory()->count( 5 )->create();
    }
}
