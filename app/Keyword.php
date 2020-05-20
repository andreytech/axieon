<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $fillable = ['keyword'];

    public $timestamps = false;

    public function serps()
    {
        return $this->hasMany(Serp::class);
    }

}
