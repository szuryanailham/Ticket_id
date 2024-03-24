<?php

namespace Database\Seeders;

use App\Models\Concert;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConcertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $concertsData = [
            [
                'title' => 'Rock Festival',
                'artist' => 'The Rock Band',
                'venue' => 'Music Arena',
                'country_id' => 2,
                'date_time' => now()->addDays(1),
                'slug' => 'rock-festival',
            ],
            [
                'title' => 'Jazz Night',
                'artist' => 'Smooth Jazz Ensemble',
                'venue' => 'Jazz Club',
                'country_id' => 1,
                'date_time' => now()->addDays(3),
                'slug' => 'jazz-night',
              
            ],
            [
                'title' => 'Pop Extravaganza',
                'artist' => 'Pop Sensations',
                'venue' => 'Pop Dome',
                'country_id' => 1,
                'date_time' => now()->addDays(7),
                'slug' => 'pop-extravaganza',
            ],
            [
                'title' => 'Indie Showcase',
                'artist' => 'Indie Vibes Collective',
                'venue' => 'Indie Hall',
                'country_id' => 2,
                'date_time' => now()->addDays(10),
                'slug' => 'indie-showcase',
               
            ],
            [
                'title' => 'Classical Symphony',
                'artist' => 'City Symphony Orchestra',
                'venue' => 'Concert Hall',
                'country_id' => 1,
                'date_time' => now()->addDays(14),
                'slug' => 'classical-symphony',
            ],
            [
                'title' => 'Electronic Beats',
                'artist' => 'Digital Sound Wizards',
                'venue' => 'Tech Lounge',
                'country_id' => 1,
                'date_time' => now()->addDays(18),
                'slug' => 'electronic-beats',
            ],
            [
                'title' => 'Country Jamboree',
                'artist' => 'Country Folk Collective',
                'venue' => 'Rustic Barn',
                'country_id' => 2,
                'date_time' => now()->addDays(22),
                'slug' => 'country-jamboree',
            ],
            [
                'title' => 'Hip-Hop Showcase',
                'artist' => 'Urban Groove Crew',
                'venue' => 'Hip-Hop Arena',
                'date_time' => now()->addDays(25),
                'country_id' => 1,
                'slug' => 'hip-hop-showcase',
            ],
            [
                'title' => 'Reggae Roots',
                'artist' => 'Island Rhythms Collective',
                'venue' => 'Reggae Lounge',
                'country_id' => 3,
                'date_time' => now()->addDays(28),
                'slug' => 'reggae-roots',
               
            ],
            [
                'title' => 'Blues Night',
                'artist' => 'Soulful Blues Trio',
                'venue' => 'Blues Lounge',
                'country_id' => 3,
                'date_time' => now()->addDays(30),
                'slug' => 'blues-night',
            ],
        ];
        
        Concert::insert($concertsData);
    }
}
