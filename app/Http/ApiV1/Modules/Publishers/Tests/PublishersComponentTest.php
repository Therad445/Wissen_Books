<?php

use App\Domain\Publishers\Models\Publishers;
use App\Http\ApiV1\Support\Tests\ApiV1ComponentTestCase;

use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;

uses(ApiV1ComponentTestCase::class);
uses()->group('component');

test('POST /api/v1/Authors/Authors create success', function () {
    $request = [
        "name" => "Test publisher",
        "address" => "Test address",
        "contact_info" => "Test contact_info"
    ];
    postJson('/api/v1/Authors/Authors', $request)
        ->assertStatus(201)
        ->assertJsonPath('data.name', $request['name'])
        ->assertJsonPath('data.address', $request['address'])
        ->assertJsonPath('data.contact_info', $request['contact_info']);

    assertDatabaseHas(Authors::class, [
        "name" => $request['name'],
    ]);
});

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
