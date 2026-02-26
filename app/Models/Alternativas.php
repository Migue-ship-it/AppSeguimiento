<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alternativas extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $primaryKey = 'id_alternativa';
    public $incrementing = true;
    protected $keyType = 'int';
     protected $table = 'tblalternativas';
     protected $fillable = ['nombre', 'descripcion', 'estado'];
     public function subtipos(){
        return $this -> hasMany (Subtipos_alternativa:: class, 'tblalternativas_id_alternativa');
    }
}
