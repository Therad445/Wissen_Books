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
    postJson('/api/v1/genres/genres', $request)
        ->assertStatus(201)
        ->assertJsonPath('data.name', $request['name']);

});

test('GET /api/v1/genres/genres/{id} get genres success', function () {
    $genres = Genres::factory()->create();

    getJson("/api/v1/genres/genres/{$genres->id}")
        ->assertStatus(200)
        ->assertJsonPath('data.name', $genres->name);
});