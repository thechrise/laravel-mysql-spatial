<?php

use KsquaredCoding\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GeometryModel.
 *
 * @property int                                          id
 * @property \KsquaredCoding\LaravelMysqlSpatial\Types\Point      location
 * @property \KsquaredCoding\LaravelMysqlSpatial\Types\LineString line
 * @property \KsquaredCoding\LaravelMysqlSpatial\Types\LineString shape
 */
class GeometryModel extends Model
{
    use SpatialTrait;

    protected $table = 'geometry';

    protected $spatialFields = ['location', 'line', 'multi_geometries'];
}
