<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subtipos_alternativa extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $primaryKey = 'id_subtipo';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $table = 'tblsubtipos_alt';
     protected $fillable = ['nombre', 'descripcion', 'estado', 'tblalternativas_id_alternativa'];
     public function alternativas(){
        return $this -> belongsTo (Alternativas:: class, 'tblalternativas_id_alternativa');
    }
}
