<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //true concatena el nombre del archivo
            //false faker solo almacenara con el nombre del archivo
            'url' => 'post/' . $this->faker->image('public/storage/post', 640, 480, null, false)
        ];
    }
}
