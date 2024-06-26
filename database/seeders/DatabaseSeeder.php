<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            SiswaSeeder::class,
        ]);

        $this->call([
            SekolahSeeder::class,
        ]);

        $this->call([
            AlbumMusikSeeder::class,
        ]);

        $this->call([
            FilmSeeder::class,
        ]);

        $this->call([
            DetailFilmSeeder::class,
        ]);

        $this->call([
            MediaFilmSeeder::class,
        ]);
    }
}
