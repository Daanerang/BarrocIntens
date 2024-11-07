<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\RoleSeeder; // Voeg deze regel toe
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Voer de RoleSeeder uit
        $this->call(RoleSeeder::class);

        // Maak een testgebruiker aan
        User::factory()->withPersonalTeam()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
