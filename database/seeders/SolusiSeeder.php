<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolusiSeeder extends Seeder
{
    public function run()
    {
        DB::table('solusis')->insert(['masalah_id' => 1, 'isi_solusi' => 'Periksa kabel/modem, restart router, hubungi ISP jika masalah berlanjut.']);
        DB::table('solusis')->insert(['masalah_id' => 2, 'isi_solusi' => 'Ganti DNS ke 8.8.8.8 atau 1.1.1.1 dan periksa pengaturan DNS.']);
        DB::table('solusis')->insert(['masalah_id' => 3, 'isi_solusi' => 'Periksa koneksi kabel LAN atau pengaturan adapter jaringan.']);
        DB::table('solusis')->insert(['masalah_id' => 4, 'isi_solusi' => 'Periksa server DHCP, atau set IP secara manual jika perlu.']);
        DB::table('solusis')->insert(['masalah_id' => 5, 'isi_solusi' => 'Pastikan tidak ada dua perangkat dengan IP yang sama di jaringan.']);
        DB::table('solusis')->insert(['masalah_id' => 6, 'isi_solusi' => 'Coba bersihkan cache browser atau gunakan browser lain.']);
        DB::table('solusis')->insert(['masalah_id' => 7, 'isi_solusi' => 'Pindahkan perangkat lebih dekat ke router atau periksa gangguan sinyal.']);
        DB::table('solusis')->insert(['masalah_id' => 8, 'isi_solusi' => 'Nonaktifkan firewall sementara dan periksa pengaturan filtering.']);
        DB::table('solusis')->insert(['masalah_id' => 9, 'isi_solusi' => 'Ganti DNS server dan pastikan server DNS aktif dan dapat diakses.']);
        DB::table('solusis')->insert(['masalah_id' => 10, 'isi_solusi' => 'Periksa kabel jaringan, pastikan tidak ada yang rusak atau longgar.']);
        DB::table('solusis')->insert(['masalah_id' => 11, 'isi_solusi' => 'Periksa adapter jaringan, update driver, atau coba adapter lain.']);
    }
}
