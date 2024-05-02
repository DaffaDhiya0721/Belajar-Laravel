@php
            $am = \App\Models\AlbumMusik::all();
            $am2 = \App\Models\AlbumMusik::where('tahun', 2023)->orderBy('id', 'desc')->get();
            $am3 = \App\Models\AlbumMusik::find(17);
            $am4 = \App\Models\AlbumMusik::where('tahun', 2021)->orderBy('id', 'asc')->first();
            
            // $am4 = \App\Models\AlbumMusik::where('kelas', 'XI RPL 3')->orderBy('id', 'desc')->firstOrFail();
@endphp

@foreach ($am as $data)
    <h1><font color="green">Eloquent All</font></h1>
    <h1>ID : {{ $data->id }}</h1>
    <h1>Judul : {{ $data->judul }}</h1>
    <h1>Tahun : {{ $data->tahun }}</h1>
    <h1>Cover Album : {{ $data->cover_album }}</h1>
    <hr>
@endforeach

@foreach ($am2 as $data)
    <h1><font color="blue">Eloquent Get</font></h1>
    <h1>ID : {{ $data->id }}</h1>
    <h1>Judul : {{ $data->judul }}</h1>
    <h1>Tahun : {{ $data->tahun }}</h1>
    <h1>Cover Album : {{ $data->cover_album }}</h1>
    <hr>
@endforeach

    <h1><font color="red">Eloquent Find</font></h1>
    <h1>ID : {{ $am3->id ?? 'kosong'}}</h1>
    <h1>Judul : {{ $am3->judul ?? 'kosong'}}</h1>
    <h1>Tahun : {{ $am3->tahun ?? 'kosong'}}</h1>
    <h1>Cover Album : {{ $am3->cover_album ?? 'kosong'}}</h1>
    <hr>

    <h1><font color="purple">Eloquent First</font></h1>
    <h1>ID : {{ $am4->id ?? 'kosong'}}</h1>
    <h1>Judul : {{ $am4->judul ?? 'kosong'}}</h1>
    <h1>Tahun : {{ $am4->tahun ?? 'kosong'}}</h1>
    <h1>Cover Album : {{ $am4->cover_album ?? 'kosong'}}</h1>
    <hr>
