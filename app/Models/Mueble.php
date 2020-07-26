<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mueble extends Model
{
    protected $table = 'muebles';
    protected $primaryKey = 'mueb_codigo';
    public $timestamps = false;
    protected $fillable = ['mueb_descripcion','mueb_stock','mueb_costo','mueb_precio'];
}
