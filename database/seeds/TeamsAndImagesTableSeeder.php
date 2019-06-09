<?php

use Illuminate\Database\Seeder;
use App\Team;
use App\Image;

class TeamsAndImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team1 = Team::create(['name' => 'Atlanta Hawks']);
        $team2 = Team::create(['name' => 'Chicago Bulls']);
        $team3 = Team::create(['name' => 'Los Angeles Lakers']);
        $team4 = Team::create(['name' => 'Memphis Grizzlies']);
        $team5 = Team::create(['name' => 'Orlando Magic']);
        Team::create(['name' => 'San Antonio Spurs']);
        $team7 = Team::create(['name' => 'Toronto Raptors']);
        $team8 = Team::create(['name' => 'Miami Heat']);
        // Team::create(['name' => 'Real Madrid']);

        Image::create([
            'team_id' => $team1->id,
            'source' => 'https://www.nba.com/assets/logos/teams/primary/web/ATL.svg'
        ]);
        Image::create([
            'team_id' => $team2->id,
            'source' => 'https://www.nba.com/assets/logos/teams/primary/web/CHI.svg'
        ]);
        Image::create([
            'team_id' => $team2->id,
            'source' => 'https://rfathead-res.cloudinary.com/image/upload/h_300,w_300/logos/lgo_nba_chicago_bulls.png'
        ]);
        Image::create([
            'team_id' => $team3->id,
            'source' => 'https://www.nba.com/assets/logos/teams/primary/web/LAL.svg'
        ]);
        Image::create([
            'team_id' => $team4->id,
            'source' => 'https://www.nba.com/assets/logos/teams/primary/web/MEM.svg'
        ]);
        Image::create([
            'team_id' => $team5->id,
            'source' => 'https://www.nba.com/assets/logos/teams/primary/web/ORL.svg'
        ]);
        Image::create([
            'team_id' => $team7->id,
            'source' => 'https://www.nba.com/assets/logos/teams/primary/web/TOR.svg'
        ]);
        Image::create([
            'team_id' => $team8->id,
            'source' => 'https://www.nba.com/assets/logos/teams/primary/web/MIA.svg'
        ]);
    }
}
