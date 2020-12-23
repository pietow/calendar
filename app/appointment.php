<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Appointment');
    }
}
