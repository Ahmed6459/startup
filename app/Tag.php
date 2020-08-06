<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function articals()
    {
        return $this->belongsToMany(App\Artical::class);
    }
}
