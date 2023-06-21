<?php

namespace App\Http\Repositories;

use App\Http\Builders\QueryBuilder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class Repository
{
    protected QueryBuilder $queryBuilder;

    public function findById(int $id, array $relations = []): Model|null
    {
        $queryBuilder = $this->queryBuilder->with($relations)->getBuilder();
        return $queryBuilder->find($id);
    }

    public function getAll(bool $withTrashed = false): Collection|array
    {
        $queryBuilder = $this->queryBuilder->getBuilder();
        return $withTrashed ? $queryBuilder->withTrashed()->get() : $queryBuilder->get();
    }
}
