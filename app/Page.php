<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['path', 'domain_id', 'subdomain', 'is_from_serp'];

    public $timestamps = false;
}
