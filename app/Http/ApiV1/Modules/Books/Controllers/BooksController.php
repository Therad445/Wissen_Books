<?php

namespace App\Http\ApiV1\Modules\Books\Controllers;

use App\Http\ApiV1\Modules\Books\Requests\CreateBooksRequest;
use Illuminate\Contracts\Support\Responsable;

class BooksController
{
    public function create(CreateBooksRequest $request): Responsable
    {
        //
    }

    public function get(int $id): Responsable
    {
        //
    }
}
