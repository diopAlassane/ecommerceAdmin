<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->text(255),
            'prix' => $this->faker->randomNumber,
            'poids' => $this->faker->randomNumber,
            'categorie_id' => \App\Models\Categorie::factory(),
        ];
    }
}
