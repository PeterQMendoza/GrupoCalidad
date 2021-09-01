<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Testing\TestView;
use Tests\TestCase;
use App\Models\Producto;

class CrearProductoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** Pruebas HTTP */
    use RefreshDatabase;

    public function test_vistaProducto()
    {
        $this->withoutExceptionHandling();
        $response = $this->withHeaders([
            'codigo'=>'pro0458966',
            'nombre'=>'producto1',
            'precio'=>120.0,
            'stock'=>13,
            'vencimiento'=>'2021-07-24',
            'idcategoriaProducto'=>1,
            'estado'=>'En inventario',
            'um'=>'unds',
        ])->get('/productos');
        $response->assertOk(200)
        ->assertSee('Productos');
    }
    
    // use RefreshDataBase;
    // /**Pruebas a la base de datos */
    // public function test_baseDatos_registrar_producto()
    // {
        
    // }

}
