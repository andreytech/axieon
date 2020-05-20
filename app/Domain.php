<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int id
 */
class Domain extends Model
{
    protected $fillable = ['domain', 'brand_name', 'is_from_serp', 'is_major', 'is_minor', 'is_local'];

    public $timestamps = false;
}
