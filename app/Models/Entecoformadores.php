<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entecoformadores extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'nis';
    public $incrementing = true;
    protected $keyType = 'int';
     protected $table = 'tblentecoformadores';
     protected $fillable = ['Tdoc', 'Ndoc', 'razonsocial','direccion', 'telefono', 'correoinstitucional', 
    'fechaNac'];
}
