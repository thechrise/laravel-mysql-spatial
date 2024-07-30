<?php

namespace KsquaredCoding\LaravelMysqlSpatial\Eloquent;

use Illuminate\Database\Query\Expression;
use Illuminate\Database\Grammar;

class SpatialExpression extends Expression
{
    public function getValue(Grammar $grammar = null)
    {
        return "ST_GeomFromText(?, ?, 'axis-order=long-lat')";
    }

    public function getSpatialValue()
    {
        return $this->value->toWkt();
    }

    public function getSrid()
    {
        return $this->value->getSrid();
    }
}
