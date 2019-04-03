<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias_servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('role_user_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->integer('servicio_id')->unsigned();
        });
        Schema::table('categorias_servicios', function($table) {
            $table->foreign('role_user_id')->references('id')->on('role_user');
            $table->foreign('categoria_id')->references('id')->on('categorias');
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
        Schema::dropIfExists('categorias_servicios');
    }
}
