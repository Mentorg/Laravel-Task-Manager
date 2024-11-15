<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(1)->create();
        User::factory()->create([
            'id' => 0,
            'name' => 'John Doe',
            'email' => 'johndoe@test.com',
            'email_verified_at' => now(),
            'password' => bcrypt('johndoe'),
            'remember_token' => Str::random(10),
        ]);
        User::factory()->create([
            'id' => 1,
            'name' => 'Jane Doe',
            'email' => 'janedoe@test.com',
            'email_verified_at' => now(),
            'password' => bcrypt('janedoe'),
            'remember_token' => Str::random(10),
        ]);
        $this->call(TaskSeeder::class);
    }
}
