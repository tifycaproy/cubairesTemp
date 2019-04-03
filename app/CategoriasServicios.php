<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriasServicios extends Model
{
    protected $table = 'categorias_servicios';
    protected $fillable = ['categoria_id','servicio_id'];
    protected $guarded = ['id'];
}