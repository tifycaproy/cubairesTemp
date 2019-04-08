<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_user_id')->unsigned();
            $table->integer('pais_id')->unsigned();
            $table->string('documento_identidad_cliente',100)->unique();
            $table->mediumText('telefono_cliente');
            $table->timestamps();
        });
        Schema::table('detalles_clientes', function($table) {
            $table->foreign('role_user_id')->references('id')->on('role_user');
            $table->foreign('pais_id')->references('id')->on('paises');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_clientes');
    }
}
