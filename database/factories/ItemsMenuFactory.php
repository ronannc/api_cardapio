<?php

namespace Database\Factories;

use App\Models\CategoryItemMenu;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ItemsMenu>
 */
class ItemsMenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'menu_id'               => Menu::all()->random()->id,
            'category_item_menu_id' => CategoryItemMenu::all()->random()->id,
            'name'                  => $this->faker->name,
            'description'           => $this->faker->text( 50 ),
            'value'                 => $this->faker->randomFloat( 2, 59, 500 ),
            'url_image'             => $this->faker->imageUrl
        ];
    }
}
