<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    // display all authors
    public function index()
    {
        $authors = Author::all();

        return view('authors\index', compact('authors'));
    }

    // display form for addition new author
    public function create()
    {
        $author = new Author();

        return view('authors\form', compact('author'));
    }

    public function show($id)
    {
        $author = Author::find($id);

        return view('authors\show', compact('author'));
    }

    // insert new author to the database
    public function store(Request $request)
    {
        $name = $request->input('name');
        $bio = $request->input('bio');

        $this->authorValidation($request);
        
        $author = new Author();
        $author->name = $name;
        $author->bio = $bio;
        $author->save();

        session()->flash('success_message', 'Author has been added.');

        return redirect()->action('App\Http\Controllers\AuthorController@index');

    }

    public function edit($id)
    {
        $author = Author::find($id);
     
        return view('authors\form', compact('author'));
    }

    public function update(Request $request, $id)
    {
        $author = Author::find($id);

        $this->authorValidation($request);

        $author->name = $request->input('name');
        $author->bio = $request->input('bio');
        $author->update();

        session()->flash('success_message', 'Author has been updated.');

        return redirect()->action('App\Http\Controllers\AuthorController@index');
        
    }

    public function delete($id)
    {
        $author = Author::find($id);
        $author->delete();

        return redirect()->action('App\Http\Controllers\AuthorController@index');
    }

    private function authorValidation(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'bio' => 'required|min:10'
        ], [
            'name.required' => 'Define name',
            'bio.required' => 'Define bio',
            'bio.min' => 'Your description is too short'
        ]);
    }
}
