<?php

use KsquaredCoding\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NoSpatialFieldsModel.
 *
 * @property \KsquaredCoding\LaravelMysqlSpatial\Types\Geometry geometry
 */
class NoSpatialFieldsModel extends Model
{
    use SpatialTrait;

    protected $table = 'no_spatial_fields';

    public $timestamps = false;
}
