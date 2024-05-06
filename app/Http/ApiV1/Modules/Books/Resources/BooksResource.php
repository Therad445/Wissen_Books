<?php

namespace App\Http\ApiV1\Modules\Books\Resources;

use App\Http\ApiV1\Support\Resources\BaseJsonResource;

/**
 * @mixin todo
 */
class BooksResource extends BaseJsonResource
{
    public function toArray($request): array
    {
        // todo
        return [
            'id' => $this->id,
            'title' => $this->title,
            'author_id' => $this->author_id,
            'isbn' => $this->isbn,
            'publisher_id' => $this->publisher_id,
            'publication_year' => $this->publication_year,
            'genre_id' => $this->genre_id,
            'description' => $this->description,
            'cover_image_url' => $this->cover_image_url,
        ];
    }
}