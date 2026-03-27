<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Threads;
use App\Models\Categories;
use App\Models\User;

class ThreadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Threads::create([
            'title' => 'Jak zacząć z Laravel?',
            'user_id' => User::where("email","test@example.com" )->firstOrFail()->id,
            'category_id' => Categories::where('name', 'Help')->firstOrFail()->id,
        ]);

        Threads::create([
            'title' => 'Jak zacząć z Laravel?',
            'user_id' => User::where("email","test@example.com" )->firstOrFail()->id,
            'category_id' => Categories::where('name', 'Help')->firstOrFail()->id,
        ]);

        Threads::create([
            'title' => 'Jak zacząć z Laravel?',
            'user_id' => User::where("email","test@example.com" )->firstOrFail()->id,
            'category_id' => Categories::where('name', 'Help')->firstOrFail()->id,
        ]);

        Threads::factory(50)->create();
    }
}
