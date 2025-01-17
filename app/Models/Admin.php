<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{

    use Notifiable;

    // The table associated with the model
    protected $table = 'admin';

    // Fillable fields for mass assignment
    protected $fillable = [
        'name',
        'username',
        'password',
        'email',
        'remember_token',
    ];

    // Hidden fields (e.g., for password hashes)
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
