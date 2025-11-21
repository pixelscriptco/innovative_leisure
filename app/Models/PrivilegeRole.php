<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrivilegeRole extends Model
{
    public function privilege()
    {
        return $this->belongsTo(Privilege::class);
    }
}
