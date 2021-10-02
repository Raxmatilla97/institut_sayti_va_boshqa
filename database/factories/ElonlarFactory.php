<?php

namespace Database\Factories;

use App\Models\Elonlar;
use Illuminate\Database\Eloquent\Factories\Factory;

class ElonlarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Elonlar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
        'slug' => $this->faker->word,
        'img' => $this->faker->word,
        'desc' => $this->faker->word
        ];
    }
}
