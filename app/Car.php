<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function owners()
    {
        return $this->belongsTo('App\Owner');
    }
}
