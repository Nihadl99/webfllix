<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use SebastianBergmann\Timer\Duration;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class movieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->entence(4),
            'synopsys'=>$this->faker->text(300),
            'Duration'=>rand(100, 200),
            'cover'=>$this->faker->imageUrl(),
            'realased_at'=>$this->faker->date,
        ];
    }
}
