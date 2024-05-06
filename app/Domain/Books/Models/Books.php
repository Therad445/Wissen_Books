<?php

namespace App\Domain\Books\Models;

use App\Domain\Books\Models\Tests\Factories\BooksFactory;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = [
        'title', 'author_id', 'isbn', 'publisher_id', 'publication_year', 'genre_id', 'description', 'cover_image_url'
    ];

    public function books()
    {
        return $this->hasMany(Books::class);
    }

    public static function factory()
    {
        return BooksFactory::new();
    }
}
