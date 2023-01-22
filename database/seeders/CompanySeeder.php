<?php

namespace Database\Seeders;

use App\Models\CategoryItemMenu;
use App\Models\Company;
use App\Models\ItemsMenu;
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
        $companies = Company::factory()
            ->count( 50 )
            ->create();
        foreach ( $companies as $company ) {
            $categoriesItemMenu = CategoryItemMenu::factory()
                ->count( 5 )
                ->create( [
                              'company_id' => $company->id,
                          ] );
            foreach ( $categoriesItemMenu as $category ) {
                ItemsMenu::factory()
                    ->count( 30 )
                    ->create( [
                                  'company_id'            => $company->id,
                                  'category_item_menu_id' => $category->id,
                              ] );
            }
        }
    }
}
