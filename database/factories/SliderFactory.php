<?php

namespace Database\Factories;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Factories\Factory;

class SliderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Slider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description1' => $this->faker->word(5),
            'description2' => $this->faker->word(4),
            'slider_image' => 'https://source.unsplash.com/random',
            'status' => 1,
        ];
    }
}
