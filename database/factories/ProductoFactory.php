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
            'vencimiento'=>'1979-06-09',
            //$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'idcategoriaProducto'=>$this->faker->numberBetween(1,5),
            'estado'=>'vigente',
            'um'=>'unds',
            //
        ];
    }
}
