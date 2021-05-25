<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        if(Schema::hasTable('detalle_pedidos'))return; //PRIMERO SE DEBE CREAR LA TABLA PEDIDOS PARA RELACIONAR
        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->id('DP_ID');
            $table->boolean('DP_Precio')->default(false);
            $table->integer('DP_Cantidad');
            
            $table->foreignId('PRO_ID')
                ->nullable()
                ->constrained('Productos')
                ->onDelete('set null');

            $table->foreignId('PED_ID')
                ->nullable()
                ->constrained('Pedidos')
                ->onDelete('set null');

            $table->timestamps();
        });
    
        // Schema::table('detalle_pedidos', function (Blueprint $table) {
        //     $table->string('test');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('detalle_pedidos');
        Schema::enableForeignKeyConstraints();
    }
}
