{{-- Start One To One --}}
<h1>Judul Film : {{  $film->judul }} </h1>
<h3>Deskripsi Film : {{ $film->deskripsi }} </h3>

<span>
    <h1>Detail Film</h1>
    <h3>Kode Film : {{ $film->DetailFilm->code_film }} </h3>
    <h3>Url IMDB : <a href="{{ $film->DetailFilm->url_imdb }}"target="_blank">
        Klik Di Sini </a>
    </h3>
</span>
{{-- End One To One --}}

{{-- Start One To Many --}}
@foreach ($film->MediaFilm as $item)   
    <p>Link Yutub : <a href="https://www.youtube.com/watch?v=KSfVtEXSmdk">Klik Di Sini</a></p>
    <p>Media Title : {{ $item->title }} </p>
    @if ($item->tipeMedia)
    <img src="{{ $item->urlMedia }}" alt="" height="200">
    @else
    @endif

    <hr>
@endforeach
{{-- End One To Many --}}