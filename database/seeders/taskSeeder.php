<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Faker\Factory as Faker;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('matakuliahs')->insert([
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

        \DB::table('khs')->insert([
            ['kodeKhs'=>'KHS001', 
            'keterangan'=>'2021/2022',
            'keteranganSingkat'=>'2021/2022'],
            ['kodeKhs'=>'KHS002', 
            'keterangan'=>'2022/2023',
            'keteranganSingkat'=>'2022/2023'],
            ['kodeKhs'=>'KHS003', 
            'keterangan'=>'2023/2024',
            'keteranganSingkat'=>'2023/2024'],
        ]
        );

        \DB::table('khs_details')->insert([
            ['kodeKhsDetail'=>'KHS001', 
            'kodeKhs'=>'KHS001',
            'nilai'=>100],
            ['kodeKhsDetail'=>'KHS002', 
            'kodeKhs'=>'KHS002',
            'nilai'=>100],
            ['kodeKhsDetail'=>'KHS003', 
            'kodeKhs'=>'KHS003',
            'nilai'=>100],
        ]
        );

        \DB::table('programstudis')->insert([
            ['nama'=>'Sistem Informasi', 
            'deskripsi'=>'Bidang ilmu yang mengintegrasikan bidang manajemen dengan bidang teknologi komputer.'],
            ['nama'=>'Akuntansi', 
            'deskripsi'=>'Bidang studi yang mempelajari materi terkait metode pencatatan dan penyusunan laporan keuangan yang berguna membantu pemangku kepentingan dalam proses pengambilan keputusan.'],
            ['nama'=>'Manajemen', 
            'deskripsi'=>'Bidang yang mempelajari teori, konsep, dan aplikasi praktis mengenai pengelolaan organisasi dan bisnis.'],
            ['nama'=>'Hukum', 
            'deskripsi'=>'Bidang yang mempelajari mengenai sistem hukum yang berlaku di kehidupan masyarakat.'],
            ['nama'=>'Informatika', 
            'deskripsi'=>'Bidang yang menguasai penggunaan piranti lunak (software) yang diarahkan melalui kompetensi Basis Data (Database), Jaringan Komputer (Computer Network), dan Kecerdasan Buatan (Artificial Intelegence) termasuk penguasaan multimedia.'],
        ]
        );

        \DB::table('pembayarans')->insert([
            ['studentID'=>'03081210019', 
            'amount'=>100.5,
            'paymentDate'=>'2023-10-23',
            'paymentMethod'=>'Cash'],
            ['studentID'=>'03081210020', 
            'amount'=>200.5,
            'paymentDate'=>'2023-10-17',
            'paymentMethod'=>'Kredit'],
            ['studentID'=>'03081210021', 
            'amount'=>300.5,
            'paymentDate'=>'2023-10-18',
            'paymentMethod'=>'Debit'],
            ['studentID'=>'03081210022', 
            'amount'=>400.5,
            'paymentDate'=>'2023-10-19',
            'paymentMethod'=>'Cash'],
            ['studentID'=>'03081210023', 
            'amount'=>500.5,
            'paymentDate'=>'2023-10-20',
            'paymentMethod'=>'Debit'],
        ]
        );

        \DB::table('jadwalperkuliahans')->insert([
            ['kodeMataKuliah'=>'SYS07701', 
            'kodeTerm'=>'T001',
            'kodeDosen'=>'D001',
            'day'=>'Senin',
            'jamMulai'=>'17:30:00',
            'jamSelesai'=>'20:10:00',
            'ruangan'=>'AD 109'],
            ['kodeMataKuliah'=>'SYS07718', 
            'kodeTerm'=>'T002',
            'kodeDosen'=>'D002',
            'day'=>'Selasa',
            'jamMulai'=>'17:30:00',
            'jamSelesai'=>'21:00:00',
            'ruangan'=>'AD 101'],
            ['kodeMataKuliah'=>'SYS07704', 
            'kodeTerm'=>'T003',
            'kodeDosen'=>'D003',
            'day'=>'Rabu',
            'jamMulai'=>'17:30:00',
            'jamSelesai'=>'20:10:00',
            'ruangan'=>'AD 101'],
            ['kodeMataKuliah'=>'SYS07728', 
            'kodeTerm'=>'T004',
            'kodeDosen'=>'D004',
            'day'=>'Kamis',
            'jamMulai'=>'17:30:00',
            'jamSelesai'=>'21:00:00',
            'ruangan'=>'AD 101'],
            ['kodeMataKuliah'=>'SYS07702', 
            'kodeTerm'=>'T005',
            'kodeDosen'=>'D005',
            'day'=>'Jumat',
            'jamMulai'=>'17:30:00',
            'jamSelesai'=>'20:10:00',
            'ruangan'=>'AD 109'],
            ['kodeMataKuliah'=>'SYS07703', 
            'kodeTerm'=>'T006',
            'kodeDosen'=>'D006',
            'day'=>'Sabtu',
            'jamMulai'=>'13:00:00',
            'jamSelesai'=>'15:30:00',
            'ruangan'=>'AD 101'],
        ]
        );

        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 100; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('mahasiswas')->insert([
    			'studentID' => '03000811'&$i,
    			'nama' => $faker->name,
    			'tahunMasuk' => '2021',
    			'jurusan' => $faker->address
    		]);
    	}

        for($i = 1; $i <= 15; $i++){
 
          DB::table('users')->insert([
              'name' => $faker->name,
              'email' => $faker->email,
              'password' => $faker->password,
          ]);
      }
    }
}
