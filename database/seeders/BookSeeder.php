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
            $publisher_data = Publisher::where('title', $datum->publisher)->first();
            if(!$publisher_data){
                $publisher_data = new Publisher;
                $publisher_data->title = $datum->publisher;
                $publisher_data->save();
            }

            $book = new Book;
            $book->title = $datum->title;
            $book->image = $datum->image;
            $book->description = $datum->title;
            $book->publisher_id = $publisher_data->id;
            $book->save();
        }
        
    }
}
