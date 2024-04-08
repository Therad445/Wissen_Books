<?php

namespace App\Domain\Books\Actions;

use App\Domain\Books\Models\Books;

class CreateBooksAction
{
    public function execute(array $fields): Books
    {
        $books = new Books();
        $books->fill($fields);
        $books->save();

        return $books;
    }
}