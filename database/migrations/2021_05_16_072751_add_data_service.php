<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Service;


class AddDataService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Service::create([
            'nama' => 'Pemasangan wallpaper dinding',
            'kategori' => 'Jasa Renovasi Rumah',
            'worker_id' => 2,
            'harga_pil_1' => 100000,
            'nama_pil1' => 'Kecil',
            'pic_1' => 'walp.jpg',
            'vid_4' => 'walp.mp4',
            'ket_pil1' => '≤ 3m x 2m',
            'description' => 'Pemasangan wallpaper dinding ruangan',
            'requirements' => 'Wallpaper'
        ]);
        Service::create([
            'nama' => 'Cuci dan kuras toren air',
            'kategori' => 'Jasa Perawatan Instalasi Air',
            'worker_id' => 3,
            'harga_pil_1' => 500000,
            'nama_pil1' => 'Cuci & Kuras',
            'pic_1' => 'toren.jpg',
            'vid_4' => 'toren.mp4',
            'ket_pil1' => 'Kuras toren + filter',
            'description' => 'Pemasangan wallpaper dinding ruangan',
            'requirements' => 'Toren air dan filter telah terpasang'
        ]);
        Service::create([
            'nama' => 'Pemasangan filter air',
            'kategori' => 'Jasa Perawatan Instalasi Air',
            'worker_id' => 4,
            'harga_pil_1' => 350000,
            'nama_pil1' => 'Perawatan',
            'pic_1' => 'filter.jpg',
            'vid_4' => 'filter.mp4',
            'ket_pil1' => '-',
            'description' => 'Perawatan Instalasi Air & Pemasangan filter air',
            'requirements' => 'Filter air'
        ]);

        Service::create([
            'nama' => 'Pengecetan dinding',
            'kategori' => 'Jasa Renovasi Rumah',
            'worker_id' => 5,
            'harga_pil_1' => 75000,
            'nama_pil1' => 'Kecil',
            'pic_1' => 'cat.jpg',
            'vid_4' => 'cat.mp4',
            'ket_pil1' => '≤ 3m x 2m',
            'description' => 'Cat dinding ruangan',
            'requirements' => 'Cat tembok '
        ]);
        Service::create([
            'nama' => 'Tebang pohon',
            'kategori' => 'Jasa kebun',
            'worker_id' => 6,
            'harga_pil_1' => 55000,
            'nama_pil1' => 'Kecil',
            'pic_1' => 'tebang.jpg',
            'vid_4' => 'tebang.mp4',
            'ket_pil1' => 'Pohon kecil (≤ 2m)',
            'description' => 'Jasa tebang pohon segala ukuran',
            'requirements' => '-'
        ]);
        Service::create([
            'nama' => 'Penulisan skripsi/makalah',
            'kategori' => 'Jasa Ketik',
            'worker_id' => 7,
            'harga_pil_1' => 100000,
            'nama_pil1' => '20 Halaman',
            'pic_1' => 'skripsi.jpg',
            'vid_4' => 'skripsi.mp4',
            'ket_pil1' => '≤ 20 halaman',
            'description' => 'Jasa penulisan/pengetikan skripsi',
            'requirements' => 'Ide dan konten sudah fix'
        ]);
        Service::create([
            'nama' => 'Cuci AC (air conditioner)',
            'kategori' => 'Jasa Perawatan Rumah',
            'worker_id' => 8,
            'harga_pil_1' => 150000,
            'nama_pil1' => 'Cuci AC',
            'pic_1' => 'ac.jpg',
            'vid_4' => 'ac.mp4',
            'ket_pil1' => 'Perawatan & Cuci AC bersih',
            'description' => 'Tidak ada',
            'requirements' => 'Tidak ada'
        ]);
        Service::create([
            'nama' => 'Kuras kolam renan',
            'kategori' => 'Jasa perawatan rumah',
            'worker_id' => 10,
            'harga_pil_1' => 400000,
            'nama_pil1' => 'Kolam Kecil',
            'pic_1' => 'kolam.jpg',
            'vid_4' => 'kolam.mp4',
            'ket_pil1' => '≤  5m x 5m',
            'description' => 'Tidak ada',
            'requirements' => 'Sumber Air Bersih'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
