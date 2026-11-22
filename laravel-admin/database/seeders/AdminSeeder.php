<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $faker = fake('id_ID');

        Admin::create([
            'username' => 'admin',
            'password' => 'admin123',
        ]);

        for ($i = 0; $i < 5; $i++) {
            Admin::create([
                'username' => $faker->unique()->userName(),
                'password' => 'password123',
            ]);
        }
    }
}
