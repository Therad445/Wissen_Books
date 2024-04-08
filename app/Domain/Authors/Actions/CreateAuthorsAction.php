<?php

namespace App\Domain\Authors\Actions;

use App\Domain\Authors\Models\Authors;

class CreateAuthorsAction
{
    public function execute(array $fields): Authors
    {
        $authors = new Authors();
        $authors->fill($fields);
        $authors->save();

        return $authors;
    }
}