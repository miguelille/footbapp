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

    static public function getAll()
    {
        return Team::get();
    }
    static public function getAllInverse()
    {
        return Team::orderBy('id', 'desc')->get();
    }
}
