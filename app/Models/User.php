<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $table = 'users';
    protected $fillable = [
        'name',
        'documento',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function getAuthIdentifierName() {
    return 'documento';
}
    public function getRol() {
    return [
        1 => 'instructor',
        2 => 'aprendiz',
        3 => 'ente conformador',
        4 => 'administrador'
    ][$this->rol];
}
    public function bitacoras(){
        return $this ->hasMany(Bitacoras:: class, 'id_login');
}
}
