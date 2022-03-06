<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(10),
            'excerpt' => $this->faker->text(10),
            'body' => $this->faker->text(50),
            'link' => $this->faker->text(6),
            'class' => $this->faker->text(5),
        ];
    }
}
