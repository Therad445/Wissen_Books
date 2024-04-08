<?php

namespace App\Http\ApiV1\Modules\Genres\Controllers;

use App\Domain\Genres\Actions\CreateGenresAction;
use App\Http\ApiV1\Modules\Genres\Queries\GenresQuery;
use App\Http\ApiV1\Modules\Genres\Requests\CreateGenresRequest;
use App\Http\ApiV1\Modules\Genres\Resources\GenresResource;

class GenresController
{
    public function create(CreateGenresRequest $request, CreateGenresAction $action): GenresResource
    {
        return new GenresResource($action->execute($request->validated()));
    }

    public function get(int $id, GenresQuery $query): GenresResource
    {
        return new GenresResource($query->findOrFail($id));
    }
}