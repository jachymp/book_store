<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {

    }

    public function create()
    {

    }

    public function show($id)
    {
        $reviews = Review::where('book_id', $id);

        return view('review/show', compact('reviews'));
    }

    public function store()
    {

    }
}
