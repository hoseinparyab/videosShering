<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'  => $this ->faker->name(),
            'slug'  => $this ->faker->slug(),
            'description'  => $this ->faker->realText(),
            'icon'  => $this ->faker->word(),
            'category_id' => Category::first()?? Category::factory()
        ];
    }
}
