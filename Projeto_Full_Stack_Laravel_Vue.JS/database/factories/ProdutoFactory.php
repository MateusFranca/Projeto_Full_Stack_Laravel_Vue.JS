<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->word,
            'descricao' => $this->faker->paragraph,
            'categoria' => $this->faker->randomElement(['Eletrônicos', 'Roupas', 'Alimentos']),
            'imagem' => $this->faker->imageUrl(),
            'preco' => $this->faker->randomFloat(2, 10, 100),
            'disponivel' => $this->faker->boolean,
        ];
    }
}
