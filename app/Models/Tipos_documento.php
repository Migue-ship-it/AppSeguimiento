<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Tipos_documento extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'nis';
    public $incrementing = true;
    protected $keyType = 'int';
    
    protected $table = 'tbltipos_documento';
     
     protected $fillable = [
        'nis',
        'denominacion', 
        'observacion'
        ];
     public function instructores(){
        return $this -> hasMany (Instructores:: class, 'tbltipos_documento_nis');
    }
}
