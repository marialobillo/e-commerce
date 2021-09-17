<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
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
        return [
            'product_name' => $this->faker->word(2),
            'product_price' => $this->faker->numberBetween($min = 100, $max = 10000),
            'category_id' => $this->faker->numberBetween(1, Category::count()),
            'product_image' => 'https://source.unsplash.com/random',
        ];
    }
}
