<?php

use App\Domain\Books\Models\Books;
use App\Http\ApiV1\Support\Tests\ApiV1ComponentTestCase;

use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;

uses(ApiV1ComponentTestCase::class);
uses()->group('component');


test('POST /api/v1/Books/Books create success', function () {
    $request = [
        "first_name" => "Test first name",
        "last_name" => "Test last name",
        "biography" => "Test biography"
      
    ];
    postJson('/api/v1/Authors/Authors', $request)
        ->assertStatus(201)
        ->assertJsonPath('data.first_name', $request['first_name'])
        ->assertJsonPath('data.tlast_nameitle', $request['last_name'])
        ->assertJsonPath('data.biography', $request['biography']);

    assertDatabaseHas(Authors::class, [
        "first_name" => $request['first_name'],
    ]);
});

test('POST /api/v1/books/books 201', function () {
    postJson('/api/v1/books/books')
        ->assertStatus(201);
});

test('POST /api/v1/books/books 400', function () {
    postJson('/api/v1/books/books')
        ->assertStatus(400);
});

test('GET /api/v1/books/books/{id} 200', function () {
    getJson('/api/v1/books/books/{id}')
        ->assertStatus(200);
});

test('GET /api/v1/books/books/{id} 404', function () {
    getJson('/api/v1/books/books/{id}')
        ->assertStatus(404);
});
