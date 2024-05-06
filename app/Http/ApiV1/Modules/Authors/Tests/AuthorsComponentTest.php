<?php

use App\Domain\Authors\Models\Authors;
use App\Http\ApiV1\Support\Tests\ApiV1ComponentTestCase;

use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;

uses(ApiV1ComponentTestCase::class);
uses()->group('component');


test('POST /api/v1/authors/authors create success', function () {
    $request = [
        'first_name' => 'Test first name',
        'last_name' => 'Test last name',
        'biography' => 'Test biography',
      
    ];
    postJson('/api/v1/authors/authors', $request)
        ->assertStatus(201)
        ->assertJsonPath('data.first_name', $request['first_name'])
        ->assertJsonPath('data.last_name', $request['last_name'])
        ->assertJsonPath('data.biography', $request['biography']);

});

test('GET /api/v1/Authors/Authors/{id} get Authors success', function () {
    $authors = Authors::factory()->create();

    getJson("/api/v1/authors/authors/{$authors->id}")
        ->assertStatus(200)
        ->assertJsonPath('data.first_name', $authors->first_name)
        ->assertJsonPath('data.last_name', $authors->last_name)
        ->assertJsonPath('data.biography', $authors->biography);
});