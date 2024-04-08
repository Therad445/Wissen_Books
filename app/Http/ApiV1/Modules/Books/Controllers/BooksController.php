<?php

namespace App\Http\ApiV1\Modules\Books\Controllers;

use App\Http\ApiV1\Modules\Books\Requests\CreateBooksRequest;
use App\Models\Book;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;

class BooksController
{
    public function create(CreateBooksRequest $request): Responsable
    {
        // Создание новой книги
        $book = new Book();
        $book->title = $request->input('title');
        $book->author_id = $request->input('author_id');
        $book->isbn = $request->input('isbn');
        $book->publisher_id = $request->input('publisher_id');
        $book->publication_year = $request->input('publication_year');
        $book->genre_id = $request->input('genre_id');
        $book->description = $request->input('description');
        $book->cover_image_url = $request->input('cover_image_url');
        $book->save();

        // Возвращение ответа
        return new JsonResponse($book, 201);
    }

    public function get(int $id): Responsable
    {
        // Получение книги по идентификатору
        $book = Book::findOrFail($id);

        // Возвращение ответа
        return new JsonResponse($book);
    }
}
