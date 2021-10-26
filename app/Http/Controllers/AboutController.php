<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutUs()
    {
        $product = 'wooden dildos!';
        $author = 'Britney';
        $year = 2020;
        return view('about/about-us',  compact('product', 'author', 'year'));
    }
}
