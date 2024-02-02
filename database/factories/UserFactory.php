<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Grão Direto',
            'email' => 'fred@graodireto.com.br',
            'password' => bcrypt('123Fred'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }
}
