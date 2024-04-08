<?php

namespace App\Domain\Publishers\Models;

use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{
    protected $fillable = [
        'name', 'address', 'contact_info'
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
