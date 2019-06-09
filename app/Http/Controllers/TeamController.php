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

    public function getSchedule()
    {
        $teams = Team::getAll();
        $matches = collect();
        for ($i = 0; $i < $teams->count(); $i++)
            for ($y = $i + 1; $y < $teams->count(); $y++)
                $matches[] = [1, $teams[$i], $teams[$y]];

        $teamsInverse = Team::getAllInverse(); // WIP optimization
        for ($i = 0; $i < $teamsInverse->count(); $i++)
            for ($y = $i + 1; $y < $teamsInverse->count(); $y++)
                $matches[] = [2, $teamsInverse[$i], $teamsInverse[$y]];

        return $matches->map(function ($match, $index) {
            return 'Phase ' . $match[0] . ' - Match ' . ($index + 1) . ': ' . $match[1]->name . ' VS ' . $match[2]->name;
        });
    }
}
