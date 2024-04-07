<?php

namespace App\Http\ApiV1\Modules\Publishers\Resources;

use App\Http\ApiV1\Support\Resources\BaseJsonResource;

/**
 * @mixin todo
 */
class PublishersResource extends BaseJsonResource
{
    public function toArray($request): array
    {
        // todo
        return [
            'publisher_id' => $this->publisher_id,
            'name' => $this->name,
            'address' => $this->address,
            'contact_info' => $this->contact_info,
        ];
    }
}