<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
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
    public function test_vistaProducto()
    {
        $response = $this->withHeaders([
            'PRO_Descripcion'=>'Producto1',
            'PRO_Precio'=>'1',
            'PRO_Stock'=>'12',
            'PRO_UM'=>'Unds'
        ])->get('/productos');
        $response->assertStatus(200)
        ->assertSee('Productos');
    }
    
    // use RefreshDataBase;
    // /**Pruebas a la base de datos */
    // public function test_baseDatos_registrar_producto()
    // {
        
    // }

}
