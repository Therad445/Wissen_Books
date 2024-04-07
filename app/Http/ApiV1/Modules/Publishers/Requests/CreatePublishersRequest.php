<?php

namespace App\Http\ApiV1\Modules\Publishers\Requests;

use App\Http\ApiV1\Support\Requests\BaseFormRequest;

class CreatePublishersRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            'contact_info' => ['string'],
            'address' => ['string'],
            'name' => ['required', 'string'],
        ];
    }
}
