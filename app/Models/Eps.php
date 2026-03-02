<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eps extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'nis';
    public $incrementing = true;
    protected $keyType = 'int';
     protected $table = 'tbleps';
     protected $fillable = ['Numdoc', 'denominacion', 'observacion'];
     public function aprendices(){
        return $this -> hasMany (Aprendices:: class, 'tbleps_nis');
    }
}
