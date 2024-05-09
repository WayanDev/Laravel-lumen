<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Factories\ModelFactory;
use Database\Factories\AuthorFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        AuthorFactory::new()->count(10)->create()->each(function (Author $author) {
            $booksCount = rand(1, 5);

            while ($booksCount > 0) {
                $author->books()->save(ModelFactory::new()->make());
                $booksCount--;
            }
        });

    }
}
// DB::table('books')->insert([
        //     'title' => 'War of the Worlds',
        //     'description' => 'A science fiction masterpiece about Martians invading London',
        //     'author' =>  'H. G. Wells',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),

        // ]);

//         DB::table('books')->insert([
//             'title' => 'A Wrinkle in Time',
//             'description' => 'A young girl goes on a mission to save her father who has
// gone missing after working on a mysterious project called a tesseract.',
//             'author' =>  'Madeleine L\'Engle',
//             'created_at' => Carbon::now(),
//             'updated_at' => Carbon::now(),

//         ]);
