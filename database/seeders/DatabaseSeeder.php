<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\Admin\PagesSeeder;
use Database\Seeders\Admin\SectionsSeeder;
use Database\Seeders\Admin\UsersSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Call UsersSeeder
        $this->call(UsersSeeder::class);

        // Call PagesSeeder
        $this->call(PagesSeeder::class);

        // Call SectionsSeeder
        $this->call(SectionsSeeder::class);
    }
}
