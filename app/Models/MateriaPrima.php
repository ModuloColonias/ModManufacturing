<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriaPrima extends Model
{
    protected $table = 'materiasprimas';
    protected $primaryKey = 'mapr_codigo';
    public $timestamps = false;
    protected $fillable = ['mapr_descripcion','mapr_stock','mapr_costo','medidas_medi_codigo'];
}
