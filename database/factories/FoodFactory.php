<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement([
                'Seasonal Steak Special',
                '10 oz AAA Striploin',
                '7 oz AAA Sirloin',
                'Italian Fried Rice',
                'Nigerian Jollof Rice'
            ]),
            'description' => $this->faker->text($maxNbChars = 200),
            'upload_url' => $this->faker->randomElement([
                'uploads/food1.webp',
                'uploads/food2.jpg',
                'uploads/food3.jpg',
            ])
        ];
    }
}
