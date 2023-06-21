<?php

namespace App\Http\Builders;

use Illuminate\Database\Eloquent\Builder;

class QueryBuilder
{
    protected Builder $builder;

    public function getBuilder(): Builder
    {
        return $this->builder;
    }

    public function with($relations): static
    {
        $this->builder = $this->builder->with($relations);
        return $this;
    }

    public function whereBetween(...$args): static
    {
        $this->builder = $this->builder->whereBetween(...$args);
        return $this;
    }

    public function where(...$args): static
    {
        $this->builder = $this->builder->where(...$args);
        return $this;
    }

    public function orderBy(...$args): static
    {
        $this->builder = $this->builder->orderBy(...$args);
        return $this;
    }
}
