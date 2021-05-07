<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function department() {
        return $this->belongsTo('app\department');
    }
}
