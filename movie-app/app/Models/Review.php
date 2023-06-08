<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['movie', 'user', 'rating', 'comment'];
    
    public function getAllReview()
    {
        return$this->review;
    }
}