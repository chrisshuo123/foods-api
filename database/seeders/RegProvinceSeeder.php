<?php

namespace Database\Seeders;

use App\Models\RegProvince;
use Illuminate\Database\Seeder;

class RegProvinceSeeder extends Seeder
{
    public function run() {
        $file = fopen('D:/Downloads/wilayah_db/Wilayah-Administrasi-Indonesia-master/csv/utf-8/provinces.csv', 'r');

        // Lewati Header
        fgetcsv($file, 0, ';');

        while (($row = fgetcsv($file, 0, ';')) !== false) {
            // Skip baris kosong
            if (count($row) < 2 || empty(trim($row[0]))) {
                continue;
            }

            // Bersihkan data dari kutip berlebih
            $id = trim($row[0]);
            $name = trim($row[1]);

            // Hapus semua kutip (", "")
            $name = str_replace(['"', '""'], '', $name);

            RegProvince::create([
                'id' => $id,
                'name' => $name
            ]);
        }
        fclose($file);
    }
}