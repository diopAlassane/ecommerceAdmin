<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

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
            'mail' => $this->faker->text(255),
            'address' => $this->faker->address,
            'telephone' => $this->faker->text(255),
            'commande_id' => \App\Models\Commande::factory(),
        ];
    }
}
