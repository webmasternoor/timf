<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone1 extends Model
{
    public function branch()
    {
        return $this->belongsTo('App\Brn');
    }
}