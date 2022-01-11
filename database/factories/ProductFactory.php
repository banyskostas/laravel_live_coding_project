<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $timestmap = $this->faker->dateTimeThisDecade();
    
        return [
            'category' => $this->faker->randomElement(['Chips', 'Crackers', 'Popcorn', 'Candy']),
            'name' => $this->faker->name,
            'description' => $this->faker->sentence($this->faker->numberBetween(10, 50)),
            'quantity' => $this->faker->numberBetween(1, 500),
            'image' => $this->faker->imageUrl(),
            'created_at' => $timestmap,
            'updated_at' => $timestmap,
        ];
    }
}