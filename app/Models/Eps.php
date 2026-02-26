<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eps extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'nis';
    public $incrementing = true;
    protected $keyType = 'int';
     protected $table = 'tbleps';
     protected $fillable = ['denominacion', 'obsservacion'];
     public function aprendices(){
        return $this -> hasMany (Aprendices:: class, 'tbleps_nis');
    }
}
