<?php

namespace App\Http\ApiV1\Modules\Publishers\Controllers;

use App\Domain\Publishers\Actions\CreatePublishersAction;
use App\Http\ApiV1\Modules\Publishers\Queries\PublishersQuery;
use App\Http\ApiV1\Modules\Publishers\Requests\CreatePublishersRequest;
use App\Http\ApiV1\Modules\Publishers\Resources\PublishersResource;

class PublishersController
{
    public function create(CreatePublishersRequest $request, CreatePublishersAction $action): PublishersResource
    {
        return new PublishersResource($action->execute($request->validated()));
    }

    public function get(int $id, PublishersQuery $query): PublishersResource
    {
        return new PublishersResource($query->findOrFail($id));
    }
}