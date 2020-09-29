<?php

namespace Database\Factories;

use App\Models\recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class recipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'name' => $this->faker->word,
          'image' => $this->faker->image,
          'serves' => $this->faker->randomDigit,
          'rating' => $this->faker->randomDigit,
          'prepTime' => $this->faker->randomDigit,
          'ingredients' => $this->faker->paragraph,
          'steps' => $this->faker->paragraph,
          'created_at' => now(),
          'updated_at' => now(),
          'user_id' => 1
        ];
    }
}
