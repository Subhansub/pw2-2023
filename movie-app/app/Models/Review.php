<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $reviews =[
        [
            'no' => 1,
            'movie' => 'Naruto',
            'user' => 'Jumharis',
            'rating' => 8.5,
            'comment' => 'Ngak pernah bosan nontonya',
        ],
        [
            'no' => 2,
            'movie' => 'Pengabdi setan',
            'user' => 'Furkan',
            'rating' => 7.2,
            'comment' => 'Filmn cukup seram',
        ],
        [
            'no' => 3,
            'movie' => 'Hangout',
            'user' => 'Fathullah',
            'rating' => 8.5,
            'comment' => 'Komedinya dapat horornyapun dapat',
        ],
        [
            'no' => 4,
            'movie' => 'OUR BLUES',
            'user' => 'Dudin',
            'rating' => 9.0,
            'comment' => 'filmnya bagus buat nonton besama keluarga',
        ],
        [
            'no' => 5,
            'movie' => 'Killers',
            'user' => 'ahmadin',
            'rating' => 6.0,
            'comment' => 'seru nontonya',
        ],
    ];

    public function getAllReviews()
    {
        return$this->reviews;
    }
}
