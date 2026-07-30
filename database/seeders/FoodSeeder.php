<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Food::create([
            'name'=> 'Soto Ayam Lamongan',
            'image'=> 'soto-lamongan.jpg',
            'province_id' => 35, // Jawa Timur (JAWA TIMUR)
            'regency_id' => 3524, // Lamongan (KAB. LAMONGAN)
            'slug'=> 'soto-lamongan',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, deserunt molestias, quod dolore id ad veritatis alias, officia quisquam consequatur magnam unde non quia quam voluptatibus ut atque repudiandae iste.',
        ]);

        Food::insert([
            [
                'name' => 'Rawon',
                'image' => 'rawon.jpeg',
                'other_location' => null,
                'province_id' => 35, // Jawa Timur (JAWA TIMUR)
                'regency_id' => 3502, // Ponorogo (KAB. PONOROGO)
                'district_id' => null,
                'village_id' => null,
                'slug' => 'rawon',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero mollitia officia dolorum quia ullam reprehenderit odit fuga dolorem. Sit modi est magnam distinctio similique ducimus quod nobis quae quia eius?',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Nasi Goreng Roa',
                'image' => 'nasgor-roa.jpg',
                'other_location' => null,
                'province_id' => 71, // Sulawesi Utara (SULAWESI UTARA)
                'regency_id' => 7171, // Manado (KOTA MANADO)
                'district_id' => null,
                'village_id' => null,
                'slug' => 'nasi-goreng-roa',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, itaque unde! Quam, fugiat nemo voluptatum numquam blanditiis eaque voluptas minima neque, modi ullam eveniet corporis animi saepe eos architecto libero.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Daging Rendang',
                'image' => 'rendang.jpg',
                'other_location' => null,
                'province_id' => 12, // Sumatra Utara (SUMATERA UTARA)
                'regency_id' => null,
                'district_id' => null,
                'village_id' => null,
                'slug' => 'daging-rendang',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptas veritatis dignissimos iste, laboriosam repellat ullam blanditiis tenetur nobis corporis assumenda vero odio expedita, nesciunt minima numquam dicta non placeat.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kue Tetu',
                'image' => 'kue-tetu-palu.jpeg',
                'other_location' => null,
                'province_id' =>72, // Sulawesi Tengah (SULAWESI TENGAH)
                'regency_id' => 7271, // Palu (KOTA PALU)
                'district_id' => null,
                'village_id' => null,
                'slug' => 'kue-tetu',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, debitis illum? Nam dicta explicabo corporis sed possimus quia ratione odio quam, minima, perspiciatis veritatis eos. Reiciendis, enim. Debitis, iure quos!',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bika Ambon',
                'image' => 'bika-ambon.jpg',
                'other_location' => null,
                'province_id' =>12, // Sumatera Utara (SUMATERA UTARA)
                'regency_id' => 1271, // Medan (KOTA MEDAN)
                'district_id' => null,
                'village_id' => null,
                'slug' => 'bika-ambon',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos aspernatur fuga ducimus, necessitatibus repellat ex aut doloribus ea! Similique officiis aperiam, itaque voluptatibus cupiditate quia ipsa blanditiis? Delectus, id itaque.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bakso',
                'image' => 'bakso.jpg',
                'other_location' => 'Fuzhou, Tiongkok',
                'province_id' => null,
                'regency_id' => null,
                'district_id' => null,
                'village_id' => null,
                'slug' => 'bakso',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum nemo laudantium minus, ut, veritatis ipsa molestias illum debitis, expedita numquam porro? Tempore quam hic exercitationem, quidem earum consequuntur ipsam voluptatem.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
