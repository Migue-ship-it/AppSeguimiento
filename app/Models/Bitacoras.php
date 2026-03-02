<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bitacoras extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
     protected $table = 'tblbitacoras';
     protected $fillable = ['id_login', 'file'];
     public function user(){
        return $this -> belongsTo (User:: class, 'id_login');
    }
}
