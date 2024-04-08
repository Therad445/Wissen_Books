<?php

namespace App\Domain\Genres\Actions;

use App\Domain\Genres\Models\Genres;

class CreateGenresAction
{
    public function execute(array $fields): Genres
    {
        $genres = new Genres();
        $genres->fill($fields);
        $genres->save();

        return $genres;
    }
}