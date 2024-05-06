<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Примеры связей книг с пользователями
        UserBooks::create([
            "first_name" => "Test first name",
            "last_name" => "Test last name",
            "biography" => "Test biography"
        ]);
        UserBooks::create([
            "first_name" => "Test first name",
            "last_name" => "Test last name",
            "biography" => "Test biography"
        ]);
    }
}