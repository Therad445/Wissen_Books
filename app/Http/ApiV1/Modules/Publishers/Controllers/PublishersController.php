<?php

namespace App\Http\ApiV1\Modules\Publishers\Controllers;

use App\Http\ApiV1\Modules\Publishers\Requests\CreatePublishersRequest;
use App\Models\Publisher;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;

class PublishersController
{
    public function create(CreatePublishersRequest $request): Responsable
    {
        // Создание нового издателя
        $publisher = new Publisher();
        $publisher->name = $request->input('name');
        $publisher->address = $request->input('address');
        $publisher->contact_info = $request->input('contact_info');
        $publisher->save();

        // Возвращение ответа
        return new JsonResponse($publisher, 201);
    }

    public function get(int $id): Responsable
    {
        // Получение издателя по идентификатору
        $publisher = Publisher::findOrFail($id);

        // Возвращение ответа
        return new JsonResponse($publisher);
    }
}
