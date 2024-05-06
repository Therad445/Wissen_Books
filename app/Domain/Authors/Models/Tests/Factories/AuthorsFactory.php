<?php

namespace App\Domain\Authors\Models\Tests\Factories;


use App\Domain\Authors\Models\Authors;
use Ensi\LaravelTestFactories\BaseModelFactory;


class AuthorsFactory extends BaseModelFactory
{
    protected $model = Authors::class;

    public function definition(): array
    {
        return [
            // 'id' => $this->id(),
            'first_name' => $this->faker->name(50),
            'last_name' => $this->faker->name(50),
            'biography' => $this->faker->text(),
        ];
    }
}