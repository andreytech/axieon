<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property-read int id
 */
class Domain extends Model
{
    protected $fillable = ['domain', 'brand_name', 'is_from_serp', 'is_major', 'is_minor', 'is_local'];

    public $timestamps = false;

    public function pages(): HasMany
    {
        return $this->hasMany(Page::class);
    }
}
