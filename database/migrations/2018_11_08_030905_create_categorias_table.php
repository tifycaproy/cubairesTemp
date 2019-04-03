<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->mediumText('nombre_categoria');            
            $table->longText('url_imagen');
            $table->bigInteger('posicion');
            $table->integer('role_user_id')->unsigned();
        });
        Schema::table('categorias', function($table) {
            $table->foreign('role_user_id')->references('id')->on('role_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
