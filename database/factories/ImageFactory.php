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
        $maxRetries = 5; // Maximum number of attempts to create the image
        $imageFileName = null;
        $attempt = 0;

        // Retry loop to generate the image file name
        while (empty($imageFileName) && $attempt < $maxRetries) {
            $imageFileName = $this->faker->image('public/storage/post', 640, 480, null, false);
            $attempt++;

            // Log a message if the attempt failed
            if (empty($imageFileName)) {
                \Log::warning("Attempt $attempt: Failed to generate image file.");
            }
        }

        // If we exhausted all retries and still couldn't create the image
        if (empty($imageFileName)) {
            throw new \Exception('Failed to generate image file after multiple attempts.');
        }

        $imageUrl = 'post/' . $imageFileName;

        // Optionally, log a success message when the image is successfully created
        \Log::info("Image generated successfully: $imageUrl");

        return [
            'url' => $imageUrl,
        ];
    }
}
