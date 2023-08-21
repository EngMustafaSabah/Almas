<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\Admin\{PagesSeeder, SectionsSeeder, UsersSeeder, BlogSeeder, CategorySeeder, CommentSeeder, TagSeeder};
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


        $classes = [
            UsersSeeder::class, // Call UsersSeeder
            PagesSeeder::class, // Call PagesSeeder
            SectionsSeeder::class, //Call SectionsSeeder
            BlogSeeder::class, // Call BlogSeeder
            CategorySeeder::class, // Call CategorySeeder
            TagSeeder::class, // Call TagSeeder
            CommentSeeder::class, // Call CommentSeeder
        ];

        foreach ($classes as $class) $this->call($class);
    }
}
