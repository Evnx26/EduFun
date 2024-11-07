<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\category;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        category::factory()->create([
            'name' => 'Data Science',
            'slug' => 'data-science',
        ]);

        category::factory()->create([
            'name' => 'Network Security',
            'slug' => 'network-security',
        ]);
    }
}
    