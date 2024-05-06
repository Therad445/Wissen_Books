<?php

namespace App\Domain\Genres\Models\Tests\Factories;


use App\Domain\Genres\Models\Genres;
use Ensi\LaravelTestFactories\BaseModelFactory;


class GenresFactory extends BaseModelFactory
{
    protected $model = Genres::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(255),
        ];
    }
    public static function factory()
    {
        return GenresFactory::new();
    }
}