<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publisherArr = [
            'Penguin Random House',
            'Hachette Livre',
            'HarperCollins',
            'Macmillan Publishers',
        ];

        foreach($publisherArr as $pub) {
            $publisher = new Publisher;
            $publisher->title = $pub;
            $publisher->save();
        }

    }
}
