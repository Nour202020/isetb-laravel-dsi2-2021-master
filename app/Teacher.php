<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function departments() {
        return $this->hasOne('App\Department');
    }
}
