<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 50; $i++) {
            $kode = $faker->randomElement(['BRG', 'AAA', 'BAN', 'BAG', 'BNG']);
            $kode .= $faker->randomNumber(6, true);
            $harga_beli = $faker->numberBetween(1, 1000);
            $harga_beli .= '000';
            $untung = $faker->numberBetween(1, 10);
            $harga_jual = $harga_beli + ($harga_beli * $untung / 100);
            $kategori = $faker->randomElement(['Barang', 'Makanan', 'Minuman', 'Snack', 'Lainnya']);
            DB::table('barang')->insert([
                'kode_barang' => $kode,
                'nama_barang' => $faker->word(),
                'total_stok' => $faker->numberBetween(10, 1000),
                'harga_beli' => $harga_beli,
                'harga_jual' => $harga_jual,
                'kategori_barang' => $kategori,
                'merk_barang' => $faker->word(),
                'satuan_barang' => 'pcs',
                'keterangan' => $faker->sentence(),
                'created_at' => now(),
            ]);
        }
    }
}
