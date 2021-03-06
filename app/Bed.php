<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{

    public function room()
    {
        return $this->belongsTo('App\Room');
    }
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
}
