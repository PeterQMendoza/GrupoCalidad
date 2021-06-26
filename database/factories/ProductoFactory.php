<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo'=>'pro_001',
            'nombre'=>'producto',
            'precio'=>$this->faker->numberBetween(1,500),
            'stock'=>$this->faker->numberBetween(1,300),
            'vencimiento'=>$this->faker->date(),
            'estado'=>'vigente',
            'um'=>'unds',
            //
        ];
    }
}
