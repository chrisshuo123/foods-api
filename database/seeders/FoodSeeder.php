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
        // Food::create([
        //     'name'=> 'Soto Ayam Lamongan',
        //     'image'=> 'soto-lamongan.jpg',
        //     'slug'=> 'soto-lamongan',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, deserunt molestias, quod dolore id ad veritatis alias, officia quisquam consequatur magnam unde non quia quam voluptatibus ut atque repudiandae iste.',
        // ]);

        Food::insert([
            [
                'name' => 'Rawon',
                'image' => 'rawon.jpeg',
                'slug' => 'rawon',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero mollitia officia dolorum quia ullam reprehenderit odit fuga dolorem. Sit modi est magnam distinctio similique ducimus quod nobis quae quia eius?',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
