<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id', 'text', 'rating'
    ];

    // Review belongs to book
    public function book()
    {
        return $this->belongsTo('App\Models\Book');
    }
}
