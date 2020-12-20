<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\Author;
use App\User;
use App\BorrowLog;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample penulis
        $author1 = Author::create(['name' => 'Mohammad Abdullah Rismanto']);
        $author2 = Author::create(['name' => 'Sulaiman Riskyathar']);
        $author3 = Author::create(['name' => 'Amin Maarufdai']);

        // Sample buku
        $book1 = Book::create(['title' => 'Pemrograman Dasar Java', 'amount' => 3, 'cover' => 'buku_dasar.jpg', 'author_id' => $author1->id]);
        $book2 = Book::create(['title' => 'Cerita Sejarah Para Pejuang Dahulu', 'amount' => 2,'cover' =>'buku_cerita.jpg', 'author_id' => $author2->id]);
        $book3 = Book::create(['title' => 'Kesejahteraan Sosial', 'amount' => 4,'cover' => 'buku_sosial.jpg', 'author_id' => $author3->id]);
        $book4 = Book::create(['title' => 'Surga Yang Diridhoi', 'amount' => 1, 'cover' => 'buku_surga.jpg', 'author_id' => $author3->id]);

        // Sample peminjaman buku
        $member = User::where('email', 'member@gmail.com')->first();
        BorrowLog::create(['user_id' => $member->id, 'book_id' => $book1->id, 'is_returned' => 0]);
        BorrowLog::create(['user_id' => $member->id, 'book_id' => $book2->id, 'is_returned' => 0]);
        BorrowLog::create(['user_id' => $member->id, 'book_id' => $book3->id, 'is_returned' => 1]);
    }
}
