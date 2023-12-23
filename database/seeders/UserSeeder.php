<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['name' => 'John Doe', 'email' => 'john@example.com']);
        User::create(['name' => 'Jane Doe', 'email' => 'jane@example.com']);
    }
}
