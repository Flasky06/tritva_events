<?php

namespace Database\Seeders;

use App\Models\Events;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Bonface',
            'email' => 'bonface@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        Events::factory()->count(250)->create();
    }
}
