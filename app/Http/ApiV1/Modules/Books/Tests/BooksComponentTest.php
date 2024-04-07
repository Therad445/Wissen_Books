<?php

use App\Http\ApiV1\Support\Tests\ApiV1ComponentTestCase;

use function Pest\Laravel\postJson;

uses(ApiV1ComponentTestCase::class);
uses()->group('component');

test('POST /api/v1/news/news 201', function () {
    postJson('/api/v1/news/news')
        ->assertStatus(201);
});

test('POST /api/v1/news/news 400', function () {
    postJson('/api/v1/news/news')
        ->assertStatus(400);
});
