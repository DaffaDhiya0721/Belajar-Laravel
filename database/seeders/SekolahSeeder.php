<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sekolah::insert(
            [
                    'nama' => 'SMK ASSALAAM BANDUNG',
                    'alamat' => 'JL. SITU TARATE DAYEUHKOLOT',
                    'email' => 'smk@smkassalaambandung.sch.id',
                    'telepon' => '0225420220',
                    'status' => 1
            ]
            );
            
        Sekolah::insert(
            [
                    'nama' => 'SMPN 2 DAYEUHKOLOT',
                    'alamat' => 'Jl. Cangkuang Kulon No. 41',
                    'email' => 'ksmpn2dyk@yahoo.com',
                    'telepon' => '0225409791',
                    'status' => 1
            ]
            );

        Sekolah::insert(
            [
                    'nama' => 'SMK ANGKASA 2 MARGAHAYU',
                    'alamat' => 'JL. DAKOTA BLOK B LANUD SULAIMAN MARGAHAYU',
                    'email' => 'angkasa2.margahayu.smk@gmail.com',
                    'telepon' => '0225425018',
                    'status' => 1
            ]
            );

        Sekolah::insert(
            [
                    'nama' => 'SMK AL-AMANAH',
                    'alamat' => 'JL. TERS CIBADUYUT KOMP. CIBOGO INDAH',
                    'email' => 'smkalamanah@rocketmail.com',
                    'telepon' => '0225430085',
                    'status' => 1
            ]
            );

        Sekolah::insert(
            [
                    'nama' => 'SMAS PASUNDAN 2 BANDUNG',
                    'alamat' => 'Jl. Cihampelas No. 167',
                    'email' => 'info@sma-pasundan2-bdg.sch.id',
                    'telepon' => '2042957',
                    'status' => 1
            ]
            );

        Sekolah::insert(
            [
                    'nama' => 'SMAN 2 BANDUNG',
                    'alamat' => 'JL. CIHAMPELAS NO. 173',
                    'email' => 'contact@sman2bdg.sch.id',
                    'telepon' => '0222032462',
                    'status' => 1
            ]
            );

        Sekolah::insert(
            [
                    'nama' => 'SMAN 1 BANDUNG',
                    'alamat' => 'JL. IR. H. JUANDA NO. 93 Bandung',
                    'email' => 'info@sman1bdg.sch.id',
                    'telepon' => '2503948',
                    'status' => 1
            ]
            );

        Sekolah::insert(
            [
                    'nama' => 'SMK MARHAS MARGAHAYU',
                    'alamat' => 'JL. TERS. KOPO NO.385/299',
                    'email' => 'smkmarhasmargahayu2004@gmail.com',
                    'telepon' => '5410923',
                    'status' => 1
            ]
            );

        Sekolah::insert(
            [
                    'nama' => 'SMK MATHLAUL ANWAR',
                    'alamat' => 'JL. TERS. KOPO NO. 302 MARGAHAYU',
                    'email' => 'smkmathlaulanwar@ymail.com',
                    'telepon' => '02287323',
                    'status' => 1
            ]
            );

        Sekolah::insert(
            [
                    'nama' => 'SMK ANGKASA 1 MARGAHAYU',
                    'alamat' => 'JL. HERCULES IV NO. 1 MARGAHAYU',
                    'email' => 'smkangkasa1margahayu@gmail.com',
                    'telepon' => '0225416703',
                    'status' => 1
            ]
            );

    }
}
