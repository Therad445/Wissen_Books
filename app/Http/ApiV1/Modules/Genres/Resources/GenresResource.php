<?php

namespace App\Http\ApiV1\Modules\Genres\Resources;

use App\Http\ApiV1\Support\Resources\BaseJsonResource;

/**
 * @mixin todo
 */
class GenresResource extends BaseJsonResource
{
    public function toArray($request): array
    {
        // todo
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}