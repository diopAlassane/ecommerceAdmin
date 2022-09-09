<?php

namespace Database\Factories;

use App\Models\Fournisseur;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class FournisseurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fournisseur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'prenom' => $this->faker->text(255),
            'nom' => $this->faker->text(255),
            'telephone' => $this->faker->text(255),
        ];
    }
}
