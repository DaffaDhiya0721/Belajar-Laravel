<?php

namespace Database\Seeders;

use App\Models\DetailFilm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailFilm::insert(
            [
            'film_id' => 1,
            'code_film' => 'tt2455368',
            'url_imdb' => 'https://www.imdb.com/title/tt2455368/?ref_=tt_mv_close'
            ] 
        );

        DetailFilm::insert(
            [
            'film_id' => 2,
            'code_film' => 'tt5169582',
            'url_imdb' => 'https://www.imdb.com/title/tt5169582/?ref_=tt_sims_tt_i_4'
            ] 
        );

        DetailFilm::insert(
            [
            'film_id' => 3,
            'code_film' => 'tt5799566',
            'url_imdb' => 'https://www.imdb.com/title/tt5799566/?ref_=tt_sims_tt_i_3'
            ] 
        );
    }
}
