<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'no' => 1,
            'judul' => 'The Shawshank Redemption',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'USA',
            'tahun' => 1994,
            'rating' => 9.8,
        ],
        [
            'no' => 2,
            'judul' => 'The Godfather',
            'poster' => 'image.png',
            'genre' => 'Crime',
            'negara' => 'USA',
            'tahun' => 1972,
            'rating' => 8.8,
        ],
        [
            'no' => 3,
            'judul' => 'The Dark Knight',
            'poster' => 'image.png',
            'genre' => 'Action',
            'negara' => 'USA',
            'tahun' => 2008,
            'rating' => 9.0,
        ],
        [
            'no' => 4,
            'judul' => 'Parasite',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'Korea Selatan',
            'tahun' => 2009,
            'rating' => 8.6,
        ],
        [
            'no' => 5,
            'judul' => 'The Godfather',
            'poster' => 'image.png',
            'genre' => 'Crime',
            'negara' => 'USA',
            'tahun' => 1972,
            'rating' => 8.4,
        ],
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}
