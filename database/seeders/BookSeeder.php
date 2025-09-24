<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Book 1',
            'pages' => 60,
            'quantity' => 20
        ],
        [
            'title' => 'Book 2',
            'pages' => 75,
            'quantity' => 7
        ]);
    }
}
