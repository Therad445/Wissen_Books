<?php

use App\Domain\Authors\Models\Authors;
use App\Http\ApiV1\Support\Tests\ApiV1ComponentTestCase;

use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;

uses(ApiV1ComponentTestCase::class);
uses()->group('component');


test('POST /api/v1/Authors/Authors create success', function () {
    $request = [
        "book_id" => "1",
        "title" => "Test title",
        "author_id" => 1,
        "isbn" => "999-9-99-999999-9",
        "publisher_id" => 1,
        "publication_year" => 2024,
        "genre_id" => 1,
        "description" => "Test description",
        "cover_image_url" => "https://example.com/book_cover.jpg"
    ];
    postJson('/api/v1/Authors/Authors', $request)
        ->assertStatus(201)
        ->assertJsonPath('data.book_id', $request['book_id'])
        ->assertJsonPath('data.title', $request['title'])
        ->assertJsonPath('data.author_id', $request['author_id'])
        ->assertJsonPath('data.isbn', $request['isbn'])
        ->assertJsonPath('data.publisher_id', $request['publisher_id'])
        ->assertJsonPath('data.publication_year', $request['publication_year'])
        ->assertJsonPath('data.genre_id', $request['genre_id'])
        ->assertJsonPath('data.description', $request['description'])
        ->assertJsonPath('data.cover_image_url', $request['cover_image_url']);

    assertDatabaseHas(Authors::class, [
        "book_id" => $request['book_id'],
    ]);
});


test('POST /api/v1/authors/authors 201', function () {
    postJson('/api/v1/authors/authors')
        ->assertStatus(201);
});

test('POST /api/v1/authors/authors 400', function () {
    postJson('/api/v1/authors/authors')
        ->assertStatus(400);
});

test('GET /api/v1/authors/authors/{id} 200', function () {
    getJson('/api/v1/authors/authors/{id}')
        ->assertStatus(200);
});

test('GET /api/v1/authors/authors/{id} 404', function () {
    getJson('/api/v1/authors/authors/{id}')
        ->assertStatus(404);
});
