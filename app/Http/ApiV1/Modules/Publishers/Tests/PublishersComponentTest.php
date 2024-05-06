<?php

use App\Domain\Publishers\Models\Publishers;
use App\Http\ApiV1\Support\Tests\ApiV1ComponentTestCase;

use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;

uses(ApiV1ComponentTestCase::class);
uses()->group('component');


test('POST /api/v1/publishers/publishers create success', function () {
    $request = [
        "name" => "Test publisher",
        "address" => "Test address",
        "contact_info" => "Test contact_info"
    ];
    postJson('/api/v1/publishers/publishers', $request)
        ->assertStatus(201)
        ->assertJsonPath('data.name', $request['name'])
        ->assertJsonPath('data.address', $request['address'])
        ->assertJsonPath('data.contact_info', $request['contact_info']);
});

test('GET /api/v1/publishers/publishers/{id} get Publishers success', function () {
    $publishers = Publishers::factory()->create();

    getJson("/api/v1/publishers/publishers/{$publishers->id}")
        ->assertStatus(200)
        ->assertJsonPath('data.name', $publishers->name)
        ->assertJsonPath('data.address', $publishers->address)
        ->assertJsonPath('data.contact_info', $publishers->contact_info);
});