<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'admins';
    protected $guard = 'admin';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'img_profile',
        'email',
        'role_id',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // If you are using roles and need a relationship:
    // public function role()
    // {
    //     return $this->belongsTo(Role::class, 'role_id', 'id');
    // }
}
