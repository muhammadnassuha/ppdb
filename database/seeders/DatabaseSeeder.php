<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin1',
            'email' => 'admin@ppdb.com',
            'password' => Hash::make('admin1'),
        ]);
        
         Admin::create([
            'name' => 'admin1',
            'email' => 'admin@ppdb.com',
            'password' => Hash::make('admin1'),
        ]);
    }
}
