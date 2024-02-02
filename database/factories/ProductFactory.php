<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'restaurant_id' => 21,
            'category_id' => 21,
            'name' => 'açai de leite ninho com morango',
            'price' => 15.00,
            'description' => 'açai de leite ninho com morango',
            'avatar' => 'açai-de-leite-ninho-com-morango.jpg',
        ];
    }

    public function morango()
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => 'Açaí de Leite Ninho com Morango',
                'description' => 'Açaí de Leite Ninho com Morango',
                'avatar' => 'acai-de-leite-ninho-com-morango.jpg',
            ];
        });
    }

    public function banana()
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => 'Açaí de Leite Ninho com Banana',
                'description' => 'Açaí de Leite Ninho com Banana',
                'avatar' => 'acai-de-leite-ninho-com-banana.jpg',
            ];
        });
    }
}
