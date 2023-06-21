<?php

namespace App\Http\Builders;

class PatientQueryBuilder extends QueryBuilder
{

    public function __construct()
    {
        $this->builder = app('App\Models\Patient')->newQuery();
    }
}
