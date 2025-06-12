<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasalahSeeder extends Seeder
{
    public function run()
    {
        DB::table('masalahs')->insert(['kode' => 'M1', 'nama_masalah' => 'Masalah pada koneksi ISP']);
        DB::table('masalahs')->insert(['kode' => 'M2', 'nama_masalah' => 'Masalah pada DNS']);
        DB::table('masalahs')->insert(['kode' => 'M3', 'nama_masalah' => 'Masalah pada koneksi LAN']);
        DB::table('masalahs')->insert(['kode' => 'M4', 'nama_masalah' => 'Masalah konfigurasi DHCP']);
        DB::table('masalahs')->insert(['kode' => 'M5', 'nama_masalah' => 'IP address konflik']);
        DB::table('masalahs')->insert(['kode' => 'M6', 'nama_masalah' => 'Masalah browser atau cache']);
        DB::table('masalahs')->insert(['kode' => 'M7', 'nama_masalah' => 'Masalah WiFi (sinyal/lemah/terputus)']);
        DB::table('masalahs')->insert(['kode' => 'M8', 'nama_masalah' => 'Firewall memblokir koneksi']);
        DB::table('masalahs')->insert(['kode' => 'M9', 'nama_masalah' => 'DNS server down atau salah konfigurasi']);
        DB::table('masalahs')->insert(['kode' => 'M10', 'nama_masalah' => 'Masalah kabel jaringan']);
        DB::table('masalahs')->insert(['kode' => 'M11', 'nama_masalah' => 'Masalah adapter jaringan']);
    }
}
