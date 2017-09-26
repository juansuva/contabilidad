<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportePagosProveedoresTable extends Migration
{
    /**
     * Run t4he migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte__pagos__proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->date('Fecha_inicio');
            $table->date('Fecha_Fin');
            $table->float('Total_pagos',8,2);
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
        Schema::dropIfExists('reporte__pagos__proveedores');
    }
}
