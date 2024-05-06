<?php

namespace App\Domain\Publishers\Models;

use App\Domain\Publishers\Models\Tests\Factories\PublishersFactory;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{
    protected $fillable = [
        'name', 'address', 'contact_info'
    ];

    public function publishers()
    {
        return $this->hasMany(Publishers::class);
    }

    public static function factory()
    {
        return PublishersFactory::new();
    }
}
