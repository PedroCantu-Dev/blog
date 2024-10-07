<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Storage::disk('public')->makeDirectory('post');



        $this->call(UserSeeder::class);
        Category::factory(4)->create();
        Tag::factory(12)->create();
        $this->call(PostSeeder::class);

    }
}
