<?php

namespace App\Http\ApiV1\Modules\Authors\Resources;

use App\Http\ApiV1\Support\Resources\BaseJsonResource;

/**
 * @mixin todo
 */
class AuthorsResource extends BaseJsonResource
{
    public function toArray($request): array
    {
        // todo
        return [
            'author_id' => $this->author_id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'biography' => $this->biography,
        ];
    }
}