<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function icon(){
        return $this->belongsTo(Icon::class);
    }
}
