<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@mail.com',
            'password' => '123456',
            'role' => 'admin',
        ]);

        $faker = fake('id_ID');

        for ($i = 0; $i < 4; $i++) {
            User::create([
                'nama' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'password' => '123456',
                'role' => 'user',
            ]);
        }
    }
}
