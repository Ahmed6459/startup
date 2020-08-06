<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artical extends Model
{
    //
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
