<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $title = fake()->sentence(3);

        $users = User::select('id')->get();

        return [
            'public_id' => fake()->uuid(),
            'title' => $title,
            'content' => fake()->paragraph(),
            'slug' => Str::slug($title),
            'author_id' => fake()->randomElement($users),
        ];
    }
}
