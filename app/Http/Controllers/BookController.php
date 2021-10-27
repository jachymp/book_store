<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Review;

class BookController extends Controller
{
    // display list of books
    public function index(Request $request)
    {
    
    $books = Book::orderBy('title')
        ->simplePaginate(20);
        // ->limit(20)                
        // ->get();

   
    return view('book/index', compact('books'));
    }

    // display form for addition of new book
    public function create()
    {
        $book = new Book();
        $categories = Category::all();

        return view('book/form', compact('categories', 'book'));
    }

    // insert new book to the database
    public function store(Request $request)
    {
        // validation
        $this->validateForm($request);

        $title = $request->input('title');
        $description = $request->input('description');


        $book = new Book();
        $book->title = $title;
        $book->description = $description;
        $book->category_id = $request->input('categories');
        $book->save();

        session()->flash('success_message', 'The book was successfully saved!');

        return redirect()->action('App\Http\Controllers\BookController@index');
    }

    // add datail about the book
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('book\detail', compact('book'));
    }

    // edit book that is in the database
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $categories = Category::all();

        return view('book/form', compact('categories', 'book'));
    }

    public function delete($id)
    {
        $book = Book::find($id);

        $book->delete();

        return redirect('/books');
    }

    public function update(Request $request, $id)
    {

        $book = Book::findOrFail($id);

        // validation
        $this->validateForm($request);

        $book->title = $request->input('title');
        $book->category_id = $request->input('categories');
        $book->description = $request->input('description');
        $book->save();

        session()->flash('success_message', 'The book was successfully updated!');

        return redirect()->action('App\Http\Controllers\BookController@index');
    }

    public function search(Request $request)
    {   
        $searchedBook = $request->input('search_bar');
        $books = Book::where('title', 'like', '%'. $searchedBook . '%')->get();

        // dd($books);

        return view('book/index', compact('books'));
    }

    public function review(Request $request, $id)
    {   

        $this->validate($request, [
            "text" => 'required|max:255',
            "rating" => 'required|numeric|min:0|max:100'
        ], [ 

             "text.required" => 'Write some review!',
             "text.max" => 'Too long,  max 255 characters!',

             "rating.required" => 'Rate me!',
             "rating.min" => 'Min rate is 0!',
             "rating.max" => 'Max rate 100!'

        ]);


        $data = $request->all();
        $data['book_id'] = $id;
        Review::create($data);

        session()->flash('success_message', 'The review was successfully updated!');

        return redirect()->action('App\Http\Controllers\BookController@show',['id'=>$id] );
    }

    private function validateForm(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'categories' => 'required'
        ], [
            'title.required' => 'Hey you, type the title of the book',
            'title.min' => 'Title has to have at least 5 letters, bitch!'
        ]);
    }
}
