<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    public function Users(){
    return  $this->belongsTo('App\User');
    }
}
