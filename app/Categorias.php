<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
  protected $table = 'categorias';
  protected $fillable = ['nombre_categoria', 'url_imagen', 'posicion'];
  protected $guarded = ['id'];
}
