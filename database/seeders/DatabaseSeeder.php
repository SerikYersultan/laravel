<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Создаем 3 авторов
        $authors = [
            ['name' => 'John Doe', 'email' => 'john@example.com'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com'],
            ['name' => 'Mark Twain', 'email' => 'mark@example.com'],
        ];

        foreach ($authors as $data) {
            $author = Author::create($data);

            // Для каждого автора создаем по 2 книги
            Book::create([
                'title' => 'Book 1 by ' . $author->name,
                'description' => 'Description for first book',
                'author_id' => $author->id,
            ]);

            Book::create([
                'title' => 'Book 2 by ' . $author->name,
                'description' => 'Description for second book',
                'author_id' => $author->id,
            ]);
        }
    }
}