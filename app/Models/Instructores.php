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
     protected $fillable = ['Tdoc', 'Ndoc', 'nombres', 'apellidos',
    'direccion', 'telefono', 'correoinstitucional', 'correopersonal', 'sexo',
    'fechaNac', 'tbltipos_documento_nis', 'tbleps_nis', 'tblrolesacademicos_nis'];
     public function rolesacademicos(){
        return $this -> belongsTo (Rolesacademicos:: class, 'tblrolesacademicos_nis', 'nis');
    }
    public function tipos_documento(){
        return $this -> belongsTo (Tipos_documento:: class, 'tbltipos_documento_nis', 'nis');
    }
    public function eps(){
        return $this -> belongsTo (Eps:: class, 'tbleps_nis', 'nis');
    }

    public function routeNotificationForMail($notification){
        return $this -> correoinstitucional;
    }

}
