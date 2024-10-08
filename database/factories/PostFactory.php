<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

//user str
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->sentence();

        return [
            //
            'name' => $name, 
            'slug' => Str::slug($name),
            'extract' => $this->faker->text(250),
            'content' => $this->faker->text(2000),
            'status' => $this->faker->randomElement(['draft','published','private']),
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id
        ];
    }
}
