<?php

namespace Database\Factories;

use App\Models\User;
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
        return [
            // Don't need to call create() since Laravel automatically only class it when necessary
            'user_id' => User::factory(),
            // Wrap in string helper so sentences will have a full stop at the end
            // Use title for title case so letters get capitalized & be nicely formatted
            'title' => str(fake()->sentence)->beforeLast('.')->title(),
            // Instead of Lorem Ipsum which is the default it is also possible to use
            // realText() which takes texts from books instead of using paragraphs()
            'body' => fake()->paragraphs(3, true),
        ];
    }
}
