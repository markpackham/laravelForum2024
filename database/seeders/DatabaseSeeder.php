<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $admin = User::factory()->create([
            'name' => 'Mark',
            'email' => 'markpackham1@gmail.com',
        ]);
    }
}
