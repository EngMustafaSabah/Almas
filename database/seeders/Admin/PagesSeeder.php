<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'name' => 'Home',
                'slug' => 'home',
                'status' => true,
            ],
            [
                'name' => 'About',
                'slug' => 'about',
                'status' => true,
            ],
            [
                'name' => 'Contact',
                'slug' => 'contact',
                'status' => true,
            ],
            [
                'name' => 'Global',
                'slug' => 'global',
                'status' => true,
            ],
            // Add more pages here as needed
        ];

        // Insert the data into the 'pages' table
        DB::table('pages')->insert($pages);
    }
}
