<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MediaFilm::insert(
            [
                'film_id' => 1,
                'tipeMedia' => 1,
                'tittle' => '',
                'urlMedia' => 'https://www.youtube.com/watch?v=UKPHsZv4Euk'
            ]
        );
    }
}
