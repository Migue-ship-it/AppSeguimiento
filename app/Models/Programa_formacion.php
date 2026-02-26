<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Programa_formacion extends Model
{
    use HasFactory; 
    public $timestamps = false;
    protected $primarykey = 'nis';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $table ='tblprograma_formacion';
    protected $fillable = ['codigo', 'denominacion', 'direccion'];
    public function fichacaracterizacion(){
        return $this -> hasMany (Ficha_caracterizacion:: class, 'tblprograma_formacion_nis');
    }
    }
