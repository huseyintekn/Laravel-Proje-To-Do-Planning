<?php

namespace App\Concerns;

use Illuminate\Database\Eloquent\Builder;
use App\Filters\Filter;

trait Filterable
{
    /**
     * Apply all relevant filters.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param  \App\Http\Filters\Filter $filter
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFilter(Builder $query, Filter $filter): Builder
    {
        return $filter->apply($query);
    }
}