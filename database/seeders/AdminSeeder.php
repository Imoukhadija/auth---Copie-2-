<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a default admin
        Admin::firstOrCreate(
            ['email' => 'khadija@example.com'],
            [
                'name' => 'Khadija',
                'password' => Hash::make('Password123!'),
                'email_verified_at' => now(),
            ]
        );

        // Create additional random admins
        Admin::factory(3)->create();
    }
}
