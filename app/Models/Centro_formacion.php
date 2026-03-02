<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Centro_formacion extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'nis';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $table ='tblcentro_formacion';
    protected $fillable = ['codigo', 'denominacion', 'direccion', 'tblregional_nis'];
    public function regional(){
        return $this -> belongsTo (Regional:: class, 'tblregional_nis');
    }
    public function fichacaracterizacion(){
        return $this -> hasMany (Ficha_caracterizacion:: class, 'tblcentro_formacion_nis');
    }
}
