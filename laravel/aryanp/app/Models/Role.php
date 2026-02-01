<?php

namespace App\Models;

use Laratrust\Models\Role as RoleModel;
use Spatie\Permission\Traits\HasRoles;

class Role extends RoleModel
{
    public $guarded = [];
}
