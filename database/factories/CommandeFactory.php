<?php

namespace Database\Factories;

use App\Models\Commande;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommandeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Commande::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mode_paiement' => $this->faker->text(255),
            'date_reglement' => $this->faker->date,
            'produit_id' => \App\Models\Produit::factory(),
        ];
    }
}
