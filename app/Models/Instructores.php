<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


class Instructores extends Model
{
    use Notifiable;

    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'nis';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $table = 'tblinstructores';
     protected $fillable = ['Ndoc', 'nombres', 'apellidos',
    'direccion', 'telefono', 'correoinstitucional', 'correopersonal', 'sexo',
    'fechaNac', 'tbltipos_documento_nis', 'tbleps_nis'];
    public function getSexo(){
        return [
            1 => 'Masculino',
            2 => 'Femenino',
            3 => 'Prefiero no decirlo',
            4 => 'Personalizado'
        ][$this->sexo]?? 'No definido';
    }
    public function tipos_documento(){
        return $this -> belongsTo (Tipos_documento:: class, 'tbltipos_documento_nis', 'nis');
    }
    public function eps(){
        return $this -> belongsTo (Eps:: class, 'tbleps_nis', 'nis');
    }
    public function routeNotificationForMail(){
        return $this -> correoinstitucional;
    }

}
