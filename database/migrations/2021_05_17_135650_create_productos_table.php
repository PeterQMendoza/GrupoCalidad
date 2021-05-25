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
            $table->id('PRO_ID');
            $table->string('PRO_Descripcion');
            $table->boolean('PRO_Precio')->default(0);
            $table->integer('PRO_Stock');
            $table->string('PRO_UM');
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
