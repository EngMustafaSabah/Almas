<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'sadmin',
                'email' => 'sadmin@almas.com',
                'password' => bcrypt('12345678'),
                'name' => 'Super Admin',
                'address_id' => null,
                'phone' => '+20109440518',
                'is_verified' => 1,
                'email_verified_at' => now(),
                'phone_verified_at' => now(),
                'verify_code' => null
            ],
        ];
        DB::table('users')->insert($users);
    }
}
