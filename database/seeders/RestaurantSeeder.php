<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Churracaria do Augusto',
                'description' => 'Churrasco de qualidade',
                'category_id' => 1,
                'phone' => '34997677943',
                'opening_hours' => '18:30 às 00:00',
                'status' => 'aberto',
                'adress' => 'Av josé fonseca e silva 274 - Uberlândia',
                'avatar' => 'https://www.hoteldelreyfoz.com.br/wp-content/uploads/2020/02/rafain-churrascaria-show-min.jpg.webp',
                'rating' => 4.5,
            ],
            [
                'id' => 2,
                'name' => 'Pastelaria do Miro',
                'description' => 'Pastel de misto',
                'category_id' => 2,
                'phone' => '34997523222',
                'opening_hours' => '14:30 às 00:00',
                'status' => 'aberto',
                'adress' => 'Av josé fonseca e silva 737 - Uberlândia',
                'avatar' => 'https://www.barrashoppingsul.com.br/sites/bss/files/styles/loja670x455/public/lojas/hr_pastel.png?itok=l-wXeWzm',
                'rating' => 4.5,
            ],
            [
                'id' => 3,
                'name' => 'Açai Demais',
                'description' => 'Açai de varios tipos',
                'category_id' => 3,
                'phone' => '34997677777',
                'opening_hours' => '17:30 às 22:30',
                'status' => 'aberto',
                'adress' => 'Av josé fonseca e silva 299 - Uberlândia',
                'avatar' => 'https://auxiliocontabil.com.br/wp-content/uploads/2019/10/loja-de-acai-rustica.jpg',
                'rating' => 4.9,
            ],
        ];

        foreach ($data as $item) {
            Restaurant::updateOrCreate(
                ['id' => $item['id']],
                $item
            );
        }
    }
}
