<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReporteVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte__ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('Fecha_inicio');
            $table->date('Fecha_Fin');
            $table->float('Ventas',8,2);
            $table->float('Costos_Ventas',8,2);
            $table->float('Ganancia_Bruta',8,2);
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
        Schema::dropIfExists('reporte__ventas');
    }
}
