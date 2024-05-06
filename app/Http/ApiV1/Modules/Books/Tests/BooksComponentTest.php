<?php

// use App\Domain\Authors\Models\Authors;
// use App\Domain\Books\Models\Books;
// use App\Domain\Genres\Models\Genres;
// use App\Domain\Publishers\Models\Publishers;
// use App\Http\ApiV1\Support\Tests\ApiV1ComponentTestCase;

// use function Pest\Laravel\assertDatabaseHas;
// use function Pest\Laravel\getJson;
// use function Pest\Laravel\postJson;

// uses(ApiV1ComponentTestCase::class);
// uses()->group('component');


// test('POST /api/v1/Books/Books create success', function () {
//     $book = Books::factory()->create();
//     $author = Authors::factory()->create();
//     $genre = Genres::factory()->create();
//     $publisher = Publishers::factory()->create();
//     $request = [
//         "book_id" => $book->id,
//         "title" => "Test title",
//         "author_id" => $author->id,
//         "isbn" => "999-9-99-999999-9",
//         "publisher_id" => $publisher->id,
//         "publication_year" => 2024,
//         "genre_id" => $genre->id,
//         "description" => "Test description",
//         "cover_image_url" => "https://example.com/book_cover.jpg"
//     ];
//     postJson('/api/v1/Books/Books', $request)
//         ->assertStatus(201)
//         ->assertJsonPath('data.book_id', $request['book_id'])
//         ->assertJsonPath('data.title', $request['title'])
//         ->assertJsonPath('data.author_id', $request['author_id'])
//         ->assertJsonPath('data.isbn', $request['isbn'])
//         ->assertJsonPath('data.publisher_id', $request['publisher_id'])
//         ->assertJsonPath('data.publication_year', $request['publication_year'])
//         ->assertJsonPath('data.genre_id', $request['genre_id'])
//         ->assertJsonPath('data.description', $request['description'])
//         ->assertJsonPath('data.cover_image_url', $request['cover_image_url']);

//     assertDatabaseHas(Books::class, [
//         "book_id" => $request['book_id'],
//         "author_id" => $request['author_id'],
//         "publisher_id" => $request['publisher_id'],
//         "genre_id" => $request['genre_id'],
//     ]);
// });

// test('POST /api/v1/books/books 201', function () {
//     postJson('/api/v1/books/books')
//         ->assertStatus(201);
// });

// test('POST /api/v1/books/books 400', function () {
//     postJson('/api/v1/books/books')
//         ->assertStatus(400);
// });

// test('GET /api/v1/books/books/{id} 200', function () {
//     getJson('/api/v1/books/books/{id}')
//         ->assertStatus(200);
// });

// test('GET /api/v1/books/books/{id} 404', function () {
//     getJson('/api/v1/books/books/{id}')
//         ->assertStatus(404);
// });
