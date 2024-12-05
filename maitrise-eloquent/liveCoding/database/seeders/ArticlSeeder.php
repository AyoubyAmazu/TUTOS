<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\articl;

class ArticlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        articl::factory()->create([
            "nom"=>"ayoub",
        ]);
    }
}
