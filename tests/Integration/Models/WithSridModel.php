<?php

use KsquaredCoding\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WithSridModel.
 *
 * @property int                                          id
 * @property \KsquaredCoding\LaravelMysqlSpatial\Types\Point      location
 * @property \KsquaredCoding\LaravelMysqlSpatial\Types\LineString line
 * @property \KsquaredCoding\LaravelMysqlSpatial\Types\LineString shape
 */
class WithSridModel extends Model
{
    use SpatialTrait;

    protected $table = 'with_srid';

    protected $spatialFields = ['location', 'line'];

    public $timestamps = false;
}
