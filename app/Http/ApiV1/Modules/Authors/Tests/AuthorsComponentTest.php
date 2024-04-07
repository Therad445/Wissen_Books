<?php

use App\Http\ApiV1\Support\Tests\ApiV1ComponentTestCase;

use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;

uses(ApiV1ComponentTestCase::class);
uses()->group('component');

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
