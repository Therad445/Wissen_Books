<?php

namespace App\Http\ApiV1\Modules\Books\Controllers;

use App\Domain\Books\Actions\CreateBooksAction;
use App\Http\ApiV1\Modules\Books\Queries\BooksQuery;
use App\Http\ApiV1\Modules\Books\Requests\CreateBooksRequest;
use App\Http\ApiV1\Modules\Books\Resources\BooksResource;

class BooksController
{
    public function create(CreateBooksRequest $request, CreateBooksAction $action): BooksResource
    {
        return new BooksResource($action->execute($request->validated()));
    }

    public function get(int $id, BooksQuery $query): BooksResource
    {
        return new BooksResource($query->findOrFail($id));
    }
}