<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    protected $table = 'medidas';
    protected $primaryKey = 'medi_codigo';
    public $timestamps = false;
    protected $fillable = ['medi_descripcion'];
}
