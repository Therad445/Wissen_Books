<?php
namespace App\Domain\Wissen_books\Models;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Model;
/**
* @property int $id
*
* @property string $title Заголовок новости
* @property string $body Текст новости
* @property int $counter Счетчик просмотров
*
* @property CarbonInterface|null $created_at
* @property CarbonInterface|null $updated_at
*/
class News extends Model
{
protected $table = 'news';
}