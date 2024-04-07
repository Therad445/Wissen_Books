<?php

namespace App\Http\ApiV1\Modules\Authors\Requests;

use App\Http\ApiV1\Support\Requests\BaseFormRequest;

class CreateAuthorsRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            'biography' => ['string'],
            'last_name' => ['required', 'string'],
            'first_name' => ['required', 'string'],
        ];
    }
}
