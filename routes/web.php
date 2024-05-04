<?php

use App\Models\AlbumMusik;
use App\Models\Sekolah;
use App\Models\Siswa;
use App\Models\Film;
use App\Models\DetailFilm;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halaman2', function () {
    return view('animals');
});

Route::get('/halaman3', function () {
    return view('fruits');
});

Route::get('/about', function () {
    $nama = "Dapuyyyyy";
    $kelamin = "Laki-laki";
    $umur = "17";
    $status = "Sekolah";
    $rank = "Mythical Honor, Bintang 42";
    return view('biodata', compact('nama', 'kelamin', 'umur', 'status', 'rank'));
});

// parameter
Route::get('/sample/{nama}', function (Request $request, $nama ) {
    $nama2 = $nama;
    return view('sample' ,compact('nama2'));
});

Route::get('siswa', function () {
    return view('siswa');
});

Route::get('sekolah', function () {
    return view('sekolah');
});

Route::get('album_musik', function () {
    return view('album_musik');
});

Route::get('film', function () {
    return view('film');
});

Route::get('film/{id}', function (int $id) {
    return view('detail-film', ['film' => Film::findOrFail($id)]);
});


