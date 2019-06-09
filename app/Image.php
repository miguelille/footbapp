<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function team()
    {
        return $this->hasOne(Team::class);
    }
}
