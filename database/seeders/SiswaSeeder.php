<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Siswa::insert(
            [
                'nama' => 'Daffa',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'Jl.Cilisung',
            ]
            );
        Siswa::insert(
            [
                'nama' => 'Dhiya',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'Jl.Cilisung',
            ]
            );
        Siswa::insert(
            [
                'nama' => 'Ulhaq',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'Jl.Cilisung',
            ]
            );
        Siswa::insert(
            [
                'nama' => 'Daffa Dhiya',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'Jl.Cilisung',
            ]
            );
        Siswa::insert(
            [
                'nama' => 'Dhiya Ulhaq',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'Jl.Cilisung',
            ]
            );
    }
}
