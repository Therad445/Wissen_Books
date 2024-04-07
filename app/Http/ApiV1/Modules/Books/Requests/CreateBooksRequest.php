<?php

namespace App\Http\ApiV1\Modules\Books\Requests;

use App\Http\ApiV1\Support\Requests\BaseFormRequest;

class CreateBooksRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            'cover_image_url' => ['string'],
            'description' => ['string'],
            'genre_id' => ['integer'],
            'publication_year' => ['integer'],
            'publisher_id' => ['integer'],
            'isbn' => ['string'],
            'author_id' => ['required', 'integer'],
            'title' => ['required', 'string'],
        ];
    }
}
