<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    public function privilegeRole()
    {
        return $this->hasMany(PrivilegeRole::class);
    }
}
