<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(["name" => "Admin", "email" => "admin@admin.com", "password" => Hash::make("admin123456")]);
        User::create(["name" => "Test", "email" => "test@test.com", "password" => Hash::make("test123456")]);
    }
}
