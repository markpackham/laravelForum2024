<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

     // php artisan db:seed
     // OR php artisan migrate:fresh --seed
     // Do we want to clear out the database and migrate it again "fresh" to avoid
     // issues with duplicate email address or my test admin 'markpackham1@gmail.com' will cause problems
    public function run(): void
    {
        // Create 10 random users
        $users = User::factory(10)->create();

        // Associate users with the posts, use random user from collection I created via $users
        // This prevents Laravel from creating brand new users just to meet the posting criteria
        $posts = Post::factory(200)->recycle($users)->create();

        // Associate comments with pre-existing users & pre-existing posts
        $comments = Comment::factory(100)->recycle($users)->recycle($posts)->create();

        $admin = User::factory()->create([
            'name' => 'Mark',
            'email' => 'markpackham1@gmail.com',
        ]);
    }
}
