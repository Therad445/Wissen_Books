<?php

namespace App\Http\ApiV1\Modules\Genres\Queries;

use App\Domain\Genres\Models\Genres;
use Ensi\QueryBuilderHelpers\Filters\DateFilter;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class GenresQuery extends QueryBuilder
{
    public function __construct()
    {
        // Связь с моделью
        parent::__construct(Genres::query());

        // Разрешить сортировать по параметрам
        $this->allowedSorts(['id', 'created_at', 'updated_at']);

        // Сортировка по умолчанию
        $this->defaultSort('-id');

        // Разрешить поиск по параметрам
        $this->allowedFilters([
            AllowedFilter::exact('id'),

            ...DateFilter::make('created_at')->exact()->lte()->gte(),
            ...DateFilter::make('updated_at')->exact()->lte()->gte(),
        ]);
    }
}