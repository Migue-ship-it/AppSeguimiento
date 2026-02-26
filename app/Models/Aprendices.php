<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aprendices extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'nis';
    public $incrementing = true;
    protected $keyType = 'int';
     protected $table = 'tblaprendices';
     protected $fillable = ['Tdoc', 'Ndoc', 'nombres', 'apellidos',
    'direccion', 'telefono', 'correoinstitucional', 'correopersonal', 'sexo',
    'fechaNac'];
     public function fichacaracterizacion(){
        return $this -> belongsTo (Ficha_caracterizacion:: class, 'tblficha_caracterizacion_nis');
    }
    public function eps(){
        return $this -> belongsTo (Eps:: class, 'tbleps_nis');
    }
    public function tipos_documento(){
        return $this -> belongsTo (Tipos_documento:: class, 'tbltipos_documento_nis');
    }
}
