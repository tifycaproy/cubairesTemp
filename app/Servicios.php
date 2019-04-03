<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
  protected $table = 'servicios';
  protected $fillable = ['titulo_servicio', 'monto', 'descripcion', 'detalles', 'condiciones', 'url_imagen', 'categoria_id' , 'valoracion', 'oferta', 'destacado', 'estatus'];
  protected $guarded = ['id'];
}
