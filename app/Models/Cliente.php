<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'clie_codigo';
    public $timestamps = false;
    protected $fillable = ['clie_nombre','clie_apellido','clie_documento','clie_telefono','clie_direccion'];
}
