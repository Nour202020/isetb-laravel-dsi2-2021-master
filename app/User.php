<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function roles() {
        return $this->hasOne('App\Role');
    }
}
