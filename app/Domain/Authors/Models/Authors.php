<?php

namespace App\Domain\Authors\Models;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'biography'
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
