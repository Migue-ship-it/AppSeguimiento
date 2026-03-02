<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Regional extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'nis';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $table ='tblregional';
    protected $fillable = ['codigo', 'denominacion'];
    public function centroformacion(){
        return $this -> hasMany (Centro_formacion:: class, 'tblregional_nis');
    }
}
