<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Page extends Model
{
    protected $fillable = ['path', 'domain_id', 'subdomain', 'is_from_serp'];

    public $timestamps = false;

    public function domain(): BelongsTo
    {
        return $this->belongsTo(Domain::class);
    }
}
