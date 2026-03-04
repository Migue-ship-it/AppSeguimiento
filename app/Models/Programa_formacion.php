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
    protected $fillable = ['codigo', 'denominacion', 'observacion'];
     public function programa_formacion(){
        return $this -> hasMany (Programa_formacion:: class, 'tblcentro_formacion_nis');
    }
    }
