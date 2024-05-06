<?php

namespace App\Domain\Authors\Models;

use App\Domain\Authors\Models\Tests\Factories\AuthorsFactory;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    protected $table = 'authors';


    protected $fillable = [
        'first_name', 
        'last_name', 
        'biography'
    ];

    public function authors()
    {
        return $this->hasMany(Authors::class);
    }

    public static function factory()
    {
        return AuthorsFactory::new();
    }
}
