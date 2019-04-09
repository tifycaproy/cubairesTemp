<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('detalle_cliente_id')->unsigned();
            $table->integer('servicio_id')->unsigned();
            $table->date('fecha_desde');
            $table->date('fecha_hasta');
            $table->integer('numero_adulto');
            $table->integer('numero_nino');
            $table->integer('estatus_solicitud');
            $table->longText('observacion');
            $table->timestamps();
        });
        Schema::table('solicitudes', function($table) {
            $table->foreign('detalle_cliente_id')->references('id')->on('detalles_clientes');
            $table->foreign('servicio_id')->references('id')->on('servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
}
