<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    public function getTeamsWithImages()
    {
        return Team::getWithImages();
    }
}
