<?php

namespace Database\Seeders;

use App\Models\Genres;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genres::create([
            'nama' => 'Action',
            'deskripsi' => 'Action-packed movies',
        ]);

        Genres::create([
            'nama' => 'Comedy',
            'deskripsi' => 'Funny and humorous movies',
        ]);

        Genres::create([
            'nama' => 'Drama',
            'deskripsi' => 'Emotional and serious themes',
        ]);

        Genres::create([
            'nama' => 'Anime',
            'deskripsi' => 'Film tentang animasi',
        ]);

        Genres::create([
            'nama' => 'Horor',
            'deskripsi' => 'Film yang menyeramkan',
        ]);
    }
}
