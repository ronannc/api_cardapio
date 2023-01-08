<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company_id'  => Company::all()->random()->id,
            'name'        => $this->faker->name,
            'description' => $this->faker->text( 50 ),
            'url_image'   => $this->faker->imageUrl
        ];
    }
}
