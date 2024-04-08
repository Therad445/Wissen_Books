<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'book_id'; // Указываем первичный ключ

    protected $fillable = [
        'title',
        'author_id',
        'isbn',
        'publisher_id',
        'publication_year',
        'genre_id',
        'description',
        'cover_image_url',
    ];

    // Определяем отношение "один ко многим" к модели Author
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'author_id');
    }

    // Определяем отношение "один ко многим" к модели Publisher
    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id', 'publisher_id');
    }

    // Определяем отношение "один ко многим" к модели Genre
    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'genre_id');
    }
}
