<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => '七海',
            'username' => 'Nanami Kece',
            'about me' => 'Saya adalah aktor dari anime jjk, jadi jangan main main kalian dengan saya yaaa awas ajaaa'
        ]);

        User::factory(5)->create();
    }
}
