<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Producto;
use database\factories\ProductoFactory;
class ProductoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use WithFaker;
    public function test_mostrarFormularioCrearProducto()
    {
        $test_pro=Producto::factory()->count(2)->make();
        $this->get('/productos/create')
        ->assertOk(200)
        ->assertJson(['created' => true]);
    }
    public function test_eliminarProducto()
    {
        $producto=Producto::find(1);
        $user->delete();
        $this->assertDeleted($producto);
    }
}
