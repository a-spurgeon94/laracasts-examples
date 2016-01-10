<?php

namespace App;

use App\Book;

class Person
{
    // Type-hint interface
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }

}
