<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'restaurant_id' => 1,
                'name' => 'Marmita carne assada',
                'price' => 22.50,
                'description' => 'Contem: arroz, feijão e carne de vaca',
                'avatar' => 'https://marmitexdesucesso.com/wp-content/uploads/2019/09/tipos-de-carnes-para-marmitex.jpg.webp'
            ],

            [
                'id' => 2,
                'restaurant_id' => 2,
                'name' => 'Pastel de misto',
                'price' => 13.50,
                'description' => 'Pastel de misto completinho com molho de alho e molho de tomate',
                'avatar' => 'https://receitinhas.com.br/wp-content/uploads/2022/10/maxresdefault-2022-10-03T111159.792-730x365.jpg'
            ],
            [
                'id' => 3,
                'restaurant_id' => 3,
                'name' => 'Açai de leite ninho com morango (500ML)',
                'price' => 16.50,
                'description' => 'Açai de 500ml, leite ninho com morango, de muita qualidade',
                'avatar' => 'https://deliveryrainhadoacai.meucatalogofacil.com/_core/_uploads/362/2022/09/1043300922dhfhc4jf3i.jpg'
            ],

            [
                'id' => 4,
                'restaurant_id' => 1,
                'name' => 'Marmita de contra file',
                'price' => 23.50,
                'description' => 'Contem: arroz, feijão tropeiro e contrafile',
                'avatar' => 'https://media-cdn.tripadvisor.com/media/photo-s/0d/8e/0d/94/marmitex-de-contra-file.jpg'
            ],

            [
                'id' => 5,
                'restaurant_id' => 2,
                'name' => 'Pastel de presunto e mussarela',
                'price' => 22.50,
                'description' => 'Pastel de presunto e mussarela completinho.',
                'avatar' => 'https://receitinhas.com.br/wp-content/uploads/2022/10/maxresdefault-2022-10-03T111159.792-730x365.jpg'
            ],

            [
                'id' => 6,
                'restaurant_id' => 3,
                'name' => 'Açai de leite ninho com nutella',
                'price' => 22.50,
                'description' => 'Açai delecioso de leite ninho com nutella',
                'avatar' => 'https://deliveryrainhadoacai.meucatalogofacil.com/_core/_uploads/362/2022/09/1043300922dhfhc4jf3i.jpg'
            ],

            [
                'id' => 7,
                'restaurant_id' => 1,
                'name' => 'Marmita completa com espetinho',
                'price' => 19.50,
                'description' => 'Marmita + espetinho completo',
                'avatar' => 'https://curtamais.com.br/goiania/wp-content/uploads/sites/2/2022/12/19c009c03a5482baefcc40f98ee30a63-1024x683.jpg'
            ],

            [
                'id' => 8,
                'restaurant_id' => 2,
                'name' => 'Pastel de queijo com queiroba',
                'price' => 13.20,
                'description' => 'Pastel de queijo com queiroba gostoso',
                'avatar' => 'https://imagens.jotaja.com/produtos/3122/4013680534579582007E410C55B6856E17CD42B6F8ACE8C11EA2E9217B5AEE57.jpeg',
            ],

            [
                'id' => 9,
                'restaurant_id' => 3,
                'name' => 'Açai puro',
                'price' => 14.00,
                'description' => 'Açai puro sem direito a adicionais (500ML)',
                'avatar' => 'https://lh3.googleusercontent.com/p/AF1QipO5W9YQzQgpFLR4Eza2ceeMnrL2rEP_O89tuKzj=w1080-h608-p-no-v0'
            ],
        ];

        foreach ($data as $item) {
            Product::updateOrCreate(
                ['id' => $item['id']],
                $item
            );
        }
    }
}
