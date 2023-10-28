<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('matakuliah_friskas')->insert([
            ['kodeMataKuliah'=>'MK001', 
            'namaMataKuliah'=>'Pemrograman Aplikasi Bisnis',
            'sks'=>4],
            ['kodeMataKuliah'=>'MK002', 
            'namaMataKuliah'=>'Audit SI',
            'sks'=>4],
            ['kodeMataKuliah'=>'MK003', 
            'namaMataKuliah'=>'Sistem Informasi Perusahaan',
            'sks'=>4],
        ]
        );
    }
}
