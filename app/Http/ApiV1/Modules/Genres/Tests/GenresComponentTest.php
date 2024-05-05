<?php

use App\Domain\Genres\Models\Genres;
use App\Http\ApiV1\Support\Tests\ApiV1ComponentTestCase;

use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;

uses(ApiV1ComponentTestCase::class);
uses()->group('component');


test('POST /api/v1/Genres/Genres create success', function () {
    $request = [
        "name" => "Test genre"
      
    ];
    postJson('/api/v1/Authors/Authors', $request)
        ->assertStatus(201)
        ->assertJsonPath('data.name', $request['name']);

    assertDatabaseHas(Authors::class, [
        "name" => $request['name'],
    ]);
});

test('POST /api/v1/genres/genres 201', function () {
    postJson('/api/v1/genres/genres')
        ->assertStatus(201);
});

test('POST /api/v1/genres/genres 400', function () {
    postJson('/api/v1/genres/genres')
        ->assertStatus(400);
});

test('GET /api/v1/genres/genres/{id} 200', function () {
    getJson('/api/v1/genres/genres/{id}')
        ->assertStatus(200);
});

test('GET /api/v1/genres/genres/{id} 404', function () {
    getJson('/api/v1/genres/genres/{id}')
        ->assertStatus(404);
});
