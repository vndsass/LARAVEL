<?php

namespace Database\Seeders;

use App\Models\Editora;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Socio;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(30)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com'
        ]);

        Socio::factory(30)->create();
        Editora::factory(30)->create();
        
        
    }
}
