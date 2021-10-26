<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class IdPublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $books = Book::whereNull('publisher_id')->get();
        foreach($books as $book) {
            $range = random_int(1, 4);
            $book->publisher_id = $range;
            $book->save();
        }
        
    }
}
