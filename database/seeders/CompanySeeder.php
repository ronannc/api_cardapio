<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\ItemsMenu;
use App\Models\Menu;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::factory()
            ->count( 50 )
            ->has(
                Menu::factory()->count( 1 )->has(
                    ItemsMenu::factory()->count( random_int( 20, 50 ) ),
                    'itemsMenu'
                )
            )
            ->create();
    }
}
