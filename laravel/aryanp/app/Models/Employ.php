<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;

use Illuminate\Database\Eloquent\Model;

class Employ extends Authenticatable implements LaratrustUser
{
     use Notifiable, HasRolesAndPermissions;
    protected $fillable = [
        'name', 'email', 'password','contect','role',
    ];
        public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
