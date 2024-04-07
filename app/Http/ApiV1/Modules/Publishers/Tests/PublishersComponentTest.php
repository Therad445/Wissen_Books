<?php

use App\Http\ApiV1\Support\Tests\ApiV1ComponentTestCase;

use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;

uses(ApiV1ComponentTestCase::class);
uses()->group('component');

test('POST /api/v1/publishers/publishers 201', function () {
    postJson('/api/v1/publishers/publishers')
        ->assertStatus(201);
});

test('POST /api/v1/publishers/publishers 400', function () {
    postJson('/api/v1/publishers/publishers')
        ->assertStatus(400);
});

test('GET /api/v1/publishers/publishers/{id} 200', function () {
    getJson('/api/v1/publishers/publishers/{id}')
        ->assertStatus(200);
});

test('GET /api/v1/publishers/publishers/{id} 404', function () {
    getJson('/api/v1/publishers/publishers/{id}')
        ->assertStatus(404);
});
