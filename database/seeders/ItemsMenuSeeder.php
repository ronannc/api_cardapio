<?php

namespace Database\Seeders;

use App\Models\ItemsMenu;
use Illuminate\Database\Seeder;

class ItemsMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItemsMenu::factory()->count( 30 )->create();
    }
}
