<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rolesacademicos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'nis';
    public $incrementing = true;
    protected $keyType = 'int';
     protected $table = 'tblrolesacademicos';
     protected $fillable = ['descripcion'];
     public function instructores(){
        return $this -> hasMany (Instructores:: class, 'tblrolesacademicos_nis');
    }
}
