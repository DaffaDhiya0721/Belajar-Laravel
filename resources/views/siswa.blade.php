@php
    //$siswa = \App\Models\Siswa::where('kelas', 'XI RPL 2')
            //->orderBy('id', 'desc')
            //->where('nama', 'Daffa Dhiya')
            //->groupBy('id')
            //->take(100)
            //->get();
            $siswa = \App\Models\Siswa::find(2);
            $siswa2 = \App\Models\Siswa::where('id', 2)->orderBy('id', 'desc')->get();
            $siswa3 = \App\Models\Siswa::where('kelas', 'XI RPL 3')->orderBy('id', 'desc')->first();
            $siswa4 = \App\Models\Siswa::where('kelas', 'XI RPL 3')->orderBy('id', 'desc')->firstOrFail();
@endphp

    <h2>Tanpa Foreach</h2>
    <h1>ID : {{ $siswa4->id ?? 'Kosong'}}</h1>
    <h1>Nama : {{ $siswa4->nama ?? 'Kosong'}}</h1>
    <h1>Kelas : {{ $siswa4->kelas ?? 'Kosong'}}</h1>
    <h1>Jenis Kelamin : {{ $siswa4->jenis_kelamin ?? 'Kosong'}}</h1>
    <hr>

{{-- @foreach (\App\Models\Sekolah::all() as $data)
    <h1>ID : {{ $data->id }}</h1>
    <h1>Nama : {{ $data->nama }}</h1>
    <h1>Alamat : {{ $data->alamat }}</h1>
    <h1>Email : {{ $data->email }}</h1>
    <h1>Telepon : {{ $data->telepon }}</h1>
    <h1>Status : {{ $data->status }}</h1>
    <hr>
@endforeach --}}

