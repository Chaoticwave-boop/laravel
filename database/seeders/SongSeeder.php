<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Songs;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Songs::create([
        'name' => 'Discord',
        'description' => 'fancy song',
        'duration' => 3.4,
        'genres_id' => 1,
       ]);


       Songs::factory()->count(10)->create();
    }
}
