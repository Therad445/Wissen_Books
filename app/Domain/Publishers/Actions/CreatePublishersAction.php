<?php

namespace App\Domain\Publishers\Actions;

use App\Domain\Publishers\Models\Publishers;

class CreatePublishersAction
{
    public function execute(array $fields): Publishers
    {
        $publishers = new Publishers();
        $publishers->fill($fields);
        $publishers->save();

        return $publishers;
    }
}