<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNominasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominas', function (Blueprint $table) {
            $table->increments('id');
            $table->float('Fecha_Pago',8,2);
            $table->float('Base',8,2);
            $table->integer('Horas_Extras');
            $table->float('Salud',8,2);
            $table->float('Pension',8,2);
            $table->float('Aux_Trasporte',8,2);
            $table->float('Neto',8,2);
          /*
          table->integer('Empleado_id')->unsigned();
          $table->foreign('Empleado_id')
                  ->references('id')
                  ->on('empleados')
                  ->onDelete('cascade');
                  */
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
        Schema::dropIfExists('nominas');
    }
}
