<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    static public function getWithImages()
    {
        return Team::with('images')->get();
    }
}
