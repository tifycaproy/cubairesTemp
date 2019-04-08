<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{
    protected $table = 'paises';
    protected $fillable = ['iso', 'nombre_pais'];
    protected $guarded = ['id'];
}
