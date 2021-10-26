<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    public function index()
    {
        $publishers = Publisher::all();

        return view('publisher/index', compact('publishers'));
    }

    public function show($id)
    {
         $publisher = Publisher::findOrFail($id);
        //  dd($books);

        return view('publisher/show', compact('publisher'));
    }
}
