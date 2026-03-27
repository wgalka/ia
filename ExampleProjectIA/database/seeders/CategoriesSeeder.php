<?php

namespace Database\Seeders;

use Database\Factories\CategoriesFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Help',
            'slug' => Str::slug('Help'),
            'description' => 'Topics that ....',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Games',
            'slug' => Str::slug('games'),
            'description' => 'Topics related to games',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Shopping',
            'slug' => Str::slug('shopping'),
            'description' => 'Topics related to promotions',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        Categories::factory(50)->create();
    }
}
