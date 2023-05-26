<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    use HasFactory;
    protected $genres = [
        [
            'no' => 1,
            'nama genre' => 'Anime',
            'deskripsi' => 'Film Tentang animasi jepang',
        ],
        [
            'no' => 2,
            'nama genre' => 'Horor',
            'deskripsi' => 'Film yang menyeramkan',
        ],
        [
            'no' => 3,
            'nama genre' => 'Komedi',
            'deskripsi' => 'Film lucu',
        ],
        [
            'no' => 4,
            'nama genre' => 'Drama',
            'deskripsi' => 'Film Tentang Kehidupan',
        ],
        [
            'no' => 5,

            'nama genre' => 'Action',
            'deskripsi' => 'Film aksi',
        ],
        
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}
