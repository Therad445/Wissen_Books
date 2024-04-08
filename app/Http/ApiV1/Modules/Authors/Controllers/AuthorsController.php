<?php

namespace App\Http\ApiV1\Modules\Authors\Controllers;

use App\Http\ApiV1\Modules\Authors\Requests\CreateAuthorsRequest;
use App\Models\Author;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;

class AuthorsController
{
    public function create(CreateAuthorsRequest $request): Responsable
    {
        // Создание нового автора
        $author = new Author();
        $author->first_name = $request->input('first_name');
        $author->last_name = $request->input('last_name');
        $author->biography = $request->input('biography');
        $author->save();

        // Возвращение ответа
        return new JsonResponse($author, 201);
    }

    public function get(int $id): Responsable
    {
        // Получение автора по идентификатору
        $author = Author::findOrFail($id);

        // Возвращение ответа
        return new JsonResponse($author);
    }
}
