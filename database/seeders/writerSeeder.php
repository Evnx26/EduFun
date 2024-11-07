<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\writer;
use Faker\Factory as Faker;
use Illuminate\Support\Str;


class writerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $avatarArray = [
            'img/writer1.png',
            'img/writer2.png',
            'img/writer3.png'
        ];

        $nameArr = [
            'Raka Putra Wicaksono',
            'Bia Mecca Annisa',
            'Abi Firmansyah'
        ];

        $emailArr =[
            'raka.wicaksono@gmail.com',
            'bia.annisa@gmail.com',
            'abi.firmansyah@gmail.com'
        ];
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 3; $i++) {
            $slug = Str::slug($nameArr[$i]);
            writer::create([
                'name' => $nameArr[$i],
                'email' => $emailArr[$i],
                'slug' => $slug,
                'avatar' => $avatarArray[$i],
            ]);
        }
    }
}
