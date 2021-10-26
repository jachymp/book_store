<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode(file_get_contents(storage_path('books.json')));

        foreach($data as $datum){
            $book = new Book;
            $book->title = $datum->title;
            // $book->publication_date = $datum->publication-date;
            $book->image = $datum->image;
            $book->description = $datum->title;
            $book->save();
        }
        
    }
}
