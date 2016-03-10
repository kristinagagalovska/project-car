<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;

class Owner extends Model
{
    public function cars()
    {
        return $this->hasMany('App\Car');
    }
}
