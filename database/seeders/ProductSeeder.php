<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'nama' => 'Sepeda Polygon',
                'deskripsi' => 'Sepeda serbaguna dengan performa tinggi untuk berbagai medan.',
                'harga' => 3500000,
                'image_path' => 'images/polygon.jpg',
                'slug' => 'sepeda-polygon',
            ],
            [
                'nama' => 'Sepeda Wimcycle',
                'deskripsi' => 'Sepeda andal untuk kegiatan santai maupun bermain anak.',
                'harga' => 2500000,
                'image_path' => 'images/wimcycle.jpg',
                'slug' => 'sepeda-wimcycle',
            ],
            [
                'nama' => 'Sepeda BMX',
                'deskripsi' => 'Sepeda lincah untuk aksi dan trik ekstrem.',
                'harga' => 1900000,
                'image_path' => 'images/bmx.jpg',
                'slug' => 'sepeda-bmx',
            ],
            [
                'nama' => 'Sepeda Fixie',
                'deskripsi' => 'Sepeda simpel untuk gaya berkendara dan stylish.',
                'harga' => 2300000,
                'image_path' => 'images/fixie.jpg',
                'slug' => 'sepeda-fixie',
            ],
            [
                'nama' => 'Sepeda Listrik Inspira',
                'deskripsi' => 'Sepeda modern untuk mobilitas praktis tanpa lelah.',
                'harga' => 1500000,
                'image_path' => 'images/listrik.jpg',
                'slug' => 'sepeda-listrik-inspira',
            ],
            [
                'nama' => 'Sepeda Keranjang',
                'deskripsi' => 'Sepeda serbaguna dengan performa tinggi untuk berbagai medan.',
                'harga' => 1700000,
                'image_path' => 'images/valentino.jpg',
                'slug' => 'sepeda-keranjang',
            ],
            [
                'nama' => 'Sepeda Genio',
                'deskripsi' => 'Sepeda serbaguna dengan performa tinggi untuk berbagai medan.',
                'harga' => 2900000,
                'image_path' => 'images/genio.jpg',
                'slug' => 'sepeda-genio',
            ],
            [
                'nama' => 'Sepeda Pacific',
                'deskripsi' => 'Sepeda serbaguna dengan performa tinggi untuk berbagai medan.',
                'harga' => 3300000,
                'image_path' => 'images/pacific.jpg',
                'slug' => 'sepeda-pacific',
            ],
            [
                'nama' => 'Sepeda Listrik Exotic',
                'deskripsi' => 'Sepeda serbaguna dengan performa tinggi.',
                'harga' => 4000000,
                'image_path' => 'images/exotic.jpg',
                'slug' => 'sepeda-listrik-exotic',
            ],
            [
                'nama' => 'Sepeda Lipat Urbano',
                'deskripsi' => 'Sepeda serbaguna dengan performa tinggi untuk berbagai medan.',
                'harga' => 4200000,
                'image_path' => 'images/urbano.jpg',
                'slug' => 'sepeda-lipat-urbano',
            ],
            [
                'nama' => 'Sepeda United',
                'deskripsi' => 'Sepeda serbaguna dengan performa tinggi untuk berbagai medan.',
                'harga' => 6500000,
                'image_path' => 'images/united.jpg',
                'slug' => 'sepeda-united',
            ],
            [
                'nama' => 'Sepeda Monarch',
                'deskripsi' => 'Sepeda serbaguna dengan performa tinggi untuk berbagai medan.',
                'harga' => 4000000,
                'image_path' => 'images/monarch.jpg',
                'slug' => 'sepeda-monarch',
            ],
        ]);
    }
}
