<?php

namespace App\Http\ApiV1\Modules\Authors\Controllers;

use App\Domain\Authors\Actions\CreateAuthorsAction;
use App\Http\ApiV1\Modules\Authors\Queries\AuthorsQuery;
use App\Http\ApiV1\Modules\Authors\Requests\CreateAuthorsRequest;
use App\Http\ApiV1\Modules\Authors\Resources\AuthorsResource;

class AuthorsController
{
    public function create(CreateAuthorsRequest $request, CreateAuthorsAction $action): AuthorsResource
    {
        return new AuthorsResource($action->execute($request->validated()));
    }

    public function get(int $id, AuthorsQuery $query): AuthorsResource
    {
        return new AuthorsResource($query->findOrFail($id));
    }
}