<?php

namespace App\Domain\Genres\Models;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    protected $fillable = [
        'name'
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
