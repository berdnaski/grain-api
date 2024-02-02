<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Comidas Brasileiras'
            ],

            [
                'id' => 2,
                'name' => 'Pastéis'
            ],

            [
                'id' => 3,
                'name' => 'Açai',
            ],
        ];

        foreach ($data as $item) {
            Category::updateOrCreate(
                ['id' => $item['id']],
                $item
            );
        }
    }
}
