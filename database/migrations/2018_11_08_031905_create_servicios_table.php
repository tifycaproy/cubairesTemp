<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->longText('titulo_servicio');
            $table->longText('url_imagen');
            $table->longText('descripcion');
            $table->longText('detalles');
            $table->longText('condiciones');
            $table->integer('valoracion')->nullable();
            $table->decimal('monto', 10, 2);
            $table->bigInteger('oferta')->nullable();
            $table->boolean('destacado')->nullable();
            $table->boolean('estatus');
        });       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
