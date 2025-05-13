<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function orders()
{
    return $this->hasMany(Order::class);
}
    protected $table = 'users';
    
    protected $fillable = [
    'username',
    'email',
    'nomor_telepon',
    'password',
    'role',
    ];

    protected $hidden = [
        'password', 
    ];
}
