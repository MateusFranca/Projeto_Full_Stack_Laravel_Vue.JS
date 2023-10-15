<?php

namespace Database\Seeders;

use Database\Factories\ProdutoFactory;
use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::factory()->count(50)->create();
    }
}
