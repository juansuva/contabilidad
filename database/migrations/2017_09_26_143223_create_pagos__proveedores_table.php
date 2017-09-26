<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos__proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->date('Fecha');
            $table->float('Valor_Pagar',8,2);
            $table->integer('estado');
            $table->timestamps();
            /*
            $table->integer('Pedido_id')->unsigned();
            $table->foreign('Pedido_id')
                    ->references('id')
                    ->on('pedidos')
                    ->onDelete('cascade');
                    */
            /*
            $table->integer('Plan_Pago_id')->unsigned();
            $table->foreign('Plan_Pago_id')
                    ->references('id')
                    ->on('planpag')
                    ->onDelete('cascade');
                    */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos__proveedores');
    }
}
