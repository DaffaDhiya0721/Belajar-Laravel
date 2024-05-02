@php
    $film = \App\Models\Film::all();
    $singlefilm = \App\Models\Film::find(3);
    $detailfilm = \App\Models\DetailFilm::all();
@endphp

<p>Daftar Film</p>
@foreach ($film as $item)
    <h2>Id : {{ $item->id }}</h2>
    <h2>Judul Film : {{ $item->judul }}</h2>
    <h2>Deskripsi Film : {{ $item->deskripsi }}</h2>
    <h3>Detail Film</h3>
    <h4>Code Film : {{ $item->DetailFilm->code_film }} </h4>
    <h4>Url IMDB Film : {{ $item->DetailFilm->url_imdb }}</h4>
    <hr>
@endforeach

<h2>Single Film</h2>
<p>
    <h2>Id : {{ $singlefilm->id }}</h2>
    <h2>Judul Film : {{ $singlefilm->judul }}</h2>
    <h2>Deskripsi : {{ $singlefilm->deskripsi }}</h2>
    <h3>Detail Film</h3>
    <h4>Code Film : {{ $singlefilm->DetailFilm->code_film }}</h4>
    <h4>Url Imdb Film : {{ $singlefilm->DetailFilm->url_imdb }}</h4>
</p>

<p style="color:chocolate">Daftar Detail Film</p>
@foreach ($detailfilm as $item)
    <h2>Id : {{ $item->id }}</h2>
    <h2>Code Film : {{ $item->code_film }}</h2>
    <h2>Url Imdb Film : {{ $item->url_imdb }}</h2>
    <h3>Detail Film</h3>
    <h4>Judul Film : {{ $item->Film->judul }}</h4>
    <h4>Deskripsi Film : {{ $item->Film->deskripsi }}</h4>
    <hr>
@endforeach