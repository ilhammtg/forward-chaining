<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    public function run()
    {
        DB::table('gejalas')->insert(['kode' => 'G1', 'nama_gejala' => 'Tidak bisa membuka website']);
        DB::table('gejalas')->insert(['kode' => 'G2', 'nama_gejala' => 'Lampu indikator LAN tidak menyala']);
        DB::table('gejalas')->insert(['kode' => 'G3', 'nama_gejala' => 'Bisa ping gateway']);
        DB::table('gejalas')->insert(['kode' => 'G4', 'nama_gejala' => 'Tidak bisa ping 8.8.8.8']);
        DB::table('gejalas')->insert(['kode' => 'G5', 'nama_gejala' => 'Tidak bisa ping domain google.com']);
        DB::table('gejalas')->insert(['kode' => 'G6', 'nama_gejala' => 'Mendapat IP address 169.254.x.x']);
        DB::table('gejalas')->insert(['kode' => 'G7', 'nama_gejala' => 'Perangkat tersambung ke WiFi tapi tidak ada internet']);
        DB::table('gejalas')->insert(['kode' => 'G8', 'nama_gejala' => 'Perangkat tidak mendapat IP address']);
        DB::table('gejalas')->insert(['kode' => 'G9', 'nama_gejala' => 'Tidak bisa ping ke gateway']);
        DB::table('gejalas')->insert(['kode' => 'G10', 'nama_gejala' => 'Hanya beberapa situs tidak bisa dibuka']);
        DB::table('gejalas')->insert(['kode' => 'G11', 'nama_gejala' => 'Koneksi sering terputus']);
        DB::table('gejalas')->insert(['kode' => 'G12', 'nama_gejala' => 'WiFi tidak terdeteksi']);
        DB::table('gejalas')->insert(['kode' => 'G13', 'nama_gejala' => 'Koneksi lambat di semua perangkat']);
        DB::table('gejalas')->insert(['kode' => 'G14', 'nama_gejala' => 'Firewall memblokir akses internet']);
        DB::table('gejalas')->insert(['kode' => 'G15', 'nama_gejala' => 'DNS Server tidak merespons']);
        DB::table('gejalas')->insert(['kode' => 'G16', 'nama_gejala' => 'Koneksi internet terputus total']);
        DB::table('gejalas')->insert(['kode' => 'G17', 'nama_gejala' => 'Perangkat bisa ping localhost']);
        DB::table('gejalas')->insert(['kode' => 'G18', 'nama_gejala' => 'Perangkat bisa ping perangkat lain di jaringan lokal']);
    }
}
