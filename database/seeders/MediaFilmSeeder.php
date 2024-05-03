<?php

namespace Database\Seeders;

use App\Models\MediaFilm;
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
                'title' => 'Director',
                'urlMedia' => 'https://cdn.gramedia.com/uploads/authors/adhitya_mulya.jpg'
            ]
        );
        
        MediaFilm::insert(
            [
                'film_id' => 1,
                'tipeMedia' => 1,
                'title' => 'Pengarang',
                'urlMedia' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSqW5XkjdoN88RNamVWAYcv19U5pmGiu_I8_o4r71tq-nXQfVKh'
            ]
        );
    }
}
