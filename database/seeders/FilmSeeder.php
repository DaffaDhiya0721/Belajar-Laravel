<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::insert(
            [
            'judul' => 'Test Pack',
            'deskripsi' => 'lorem ipsum'
            ]  
        );

        Film::insert(
            [
            'judul' => 'Single',
            'deskripsi' => 'lorem ipsum'
            ]  
        );

        Film::insert(
            [
            'judul' => 'Koala Kumal',
            'deskripsi' => 'lorem ipsum'
            ]  
        );
    }
}
