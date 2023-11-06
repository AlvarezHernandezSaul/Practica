<?php

namespace Database\Factories;

use App\Models\tb_estados;
use Illuminate\Database\Eloquent\Factories\Factory;

class tb_estadosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = tb_estados::class;

    public function definition()
    {
        return [
            'nombre' =>  $this->faker->state(),
        ];
    }
}
