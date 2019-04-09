<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitudes extends Model
{
    protected $table = 'solicitudes';
  	protected $fillable = ['detalle_cliente_id', 'servicio_id', 'fecha_desde', 'fecha_hasta', 'numero_adulto', 'numero_nino', 'observacion','estatus_solicitud'];
  	protected $guarded = ['id'];
}
