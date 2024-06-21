<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       $persianfaker = \Faker\Factory::create('fa_IR');
        return [
            'name'=> $persianfaker->name(),
            'url'=> $this->faker->imageUrl(446, 240, 'animals', true),
            'length'=> $this->faker->randomNumber(3),
            'slug'=> $this->faker->slug(),
            'description'=> $persianfaker->realText(),



        ];
    }
}
