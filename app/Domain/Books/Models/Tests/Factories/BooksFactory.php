<?php

namespace App\Domain\Books\Models\Tests\Factories;


use App\Domain\Books\Models\Books;
use Ensi\LaravelTestFactories\BaseModelFactory;


class BooksFactory extends BaseModelFactory
{
    protected $model = Books::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->title(255),
            'author_id' => $this->faker->integer(),
            'isbn' => $this->faker->title(20),
            'publisher_id' => $this->faker->integer(),
            'publication_year' => $this->faker->year(),
            'genre_id' => $this->faker->integer(),
            'description' => $this->faker->description(),
            'cover_image_url' => $this->faker->url(),
        ];
    }
}