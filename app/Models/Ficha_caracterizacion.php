<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ficha_caracterizacion extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'nis';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $table ='tblficha_caracterizacion';
    protected $fillable = ['codigo', 'cupo', 'fecha_Inicio', 'fecha_Fin', 'observaciones'];
   public function centroformacion(){
        return $this -> belongsTo (Centro_formacion:: class, 'tblcentro_formacion_nis');
    }
    public function programaformacion(){
        return $this -> belongsTo (Programa_formacion:: class, 'tblprograma_formacion_nis');
    }
     public function aprendices(){
        return $this -> hasMany (Aprendices:: class, 'tblficha_caracterizacion_nis');
    }
}
