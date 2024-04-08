<?php

namespace App\Http\ApiV1\Modules\Genres\Controllers;

use App\Http\ApiV1\Modules\Genres\Requests\CreateGenresRequest;
use App\Models\Genre;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;

class GenresController
{
    public function create(CreateGenresRequest $request): Responsable
    {
        // Создание нового жанра
        $genre = new Genre();
        $genre->name = $request->input('name');
        $genre->save();

        // Возвращение ответа
        return new JsonResponse($genre, 201);
    }

    public function get(int $id): Responsable
    {
        // Получение жанра по идентификатору
        $genre = Genre::findOrFail($id);

        // Возвращение ответа
        return new JsonResponse($genre);
    }
}
