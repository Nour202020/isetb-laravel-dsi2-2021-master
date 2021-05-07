<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function students() {
        return $this->hasMany('app\Student');
    }

    public function teachers() {
        return $this->hasMany('app\Teacher');
    }
}
