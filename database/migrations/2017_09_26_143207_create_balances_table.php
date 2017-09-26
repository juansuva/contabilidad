<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balances', function (Blueprint $table) {
            $table->increments('id');
            $table->date('Fecha');
            $table->float('Efectivo',9,2);
            $table->float('Cuentas_Cobrar',8,2);
            $table->float('Cuentas_Pagar',8,2);
            $table->float('Impuestos',8,2);
            $table->float('Activos',8,2);
            $table->float('Pasivos',8,2);
            $table->float('Total',8,2);
            $table->integer('ventas_id')->unsigned();
            $table->foreign('ventas_id')
                  ->references('id')
                  ->on('reporte__ventas')
                  ->onDelete('cascade');
            $table->integer('proveedores_id')->unsigned();
            $table->foreign('proveedores_id')
                  ->references('id')
                  ->on('reporte__pagos__proveedores')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('balances');
    }
}
