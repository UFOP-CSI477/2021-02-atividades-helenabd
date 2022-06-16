<?php

namespace Database\Factories;

use App\Models\Coleta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coleta>
 */
class ColetaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coleta::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'item_id' => $this->faker->numberBetween(1, 10),
            'entidade_id' => $this->faker->numberBetween(1, 10),
            'quantidade' => $this->faker->numberBetween(1, 10),
            'data' => $this->faker->date(),
        ];
    }
}
