<?php

namespace App\Domain\Genres\Models;

use App\Domain\Genres\Models\Tests\Factories\GenresFactory;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    protected $fillable = [
        'name'
    ];

    public function genres()
    {
        return $this->hasMany(Genres::class);
    }

    public static function factory()
    {
        return GenresFactory::new();
    }
}
