<?php

namespace Database\Factories;

use App\Models\tb_estados;
use App\Models\tb_municipios;
use Illuminate\Database\Eloquent\Factories\Factory;

class tb_municipiosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = tb_municipios::class;

    public function definition()
    {
        return [
            'cp' => $this->faker->postcode(),
            'nombre' =>  $this->faker->state(),
            'id_estado' => tb_estados::all()->random()->id_estados
        ];
    }
}
