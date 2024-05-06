<?php

namespace App\Domain\Publishers\Models\Tests\Factories;


use App\Domain\Publishers\Models\Publishers;
use Ensi\LaravelTestFactories\BaseModelFactory;


class PublishersFactory extends BaseModelFactory
{
    protected $model = Publishers::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->text(20),
            'address' => $this->faker->text(50),
            'contact_info' => $this->faker->text(50),
        ];
    }
}