<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serp extends Model
{
    public $timestamps = false;

    public function keyword()
    {
        return $this->belongsTo(Keyword::class);
    }
}
