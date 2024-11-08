<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('books')->insert([
                'title' => fake()->text(30),
                'thumbnail' => fake()->imageUrl(),
                'author' => fake()->name,
                'publisher' => fake()->company,
                'publication' => Carbon::now()->subDays(rand(1, 3650)),
                'price' => rand(50000, 500000),
                'quantity' => rand(1, 100),
                'category_id' => rand(1, 5),
            ]);
        }
    }
}
