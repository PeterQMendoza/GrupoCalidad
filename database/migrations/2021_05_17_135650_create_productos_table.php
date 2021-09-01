<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('productos'))return;//PRIMERO TIENE QUE TENER ESTA TABLA ANTES DE AGREGAR TBL DETALE PEDIDOS
        Schema::create('productos', function (Blueprint $table) {
            $table->id('Id');
            $table->string('codigo')->unique();
            $table->string('nombre');
            $table->decimal('precio',$precision=8,$scale=2)->default(0);
            $table->integer('stock');
            $table->date('vencimiento');
            $table->foreignId('idcategoriaProducto');
            $table->string('estado');
            $table->string('um');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('productos');
        Schema::enableForeignKeyConstraints();
    }
}
