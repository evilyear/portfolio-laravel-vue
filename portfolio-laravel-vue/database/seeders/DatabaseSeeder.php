<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory()->create([
            'name' => 'Feri',
            'email' => 'feri@teszt.hu',
            'password' => '$2y$10$Fa/fkz1jQqU1ZFHCN.wPNuhC06YzQiqoU8hlnYUXEb73wR15Ixvre', // password
        ]);
        User::factory()->create([
            'name' => 'Gizi',
            'email' => 'gizi@teszt.hu',
            'password' => '$2y$10$Fa/fkz1jQqU1ZFHCN.wPNuhC06YzQiqoU8hlnYUXEb73wR15Ixvre', // password
        ]);
        Portfolio::factory()->count(30)->create();
    }
}
