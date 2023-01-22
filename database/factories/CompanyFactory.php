<?php

namespace Database\Factories;

use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'          => $this->faker->name,
            'description'   => $this->faker->text( 50 ),
            'group_id'      => Group::all()->random()->id,
            'url_logo'      => $this->faker->imageUrl,
            'primary_color' => $this->faker->hexColor,
            'star_hours'    => $this->faker->time( '06:00', '08:00' ),
            'finish_hours'  => $this->faker->time( '17:00', '19:00' ),
        ];
    }
}
