<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallesClientes extends Model
{
    protected $table = 'detalles_clientes';
    protected $fillable = ['role_user_id', 'documento_identidad_cliente','telefono_cliente','pais_id','role_user_id'];
    protected $guarded = ['id'];
}
