<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo_User extends Model
{   
 public function User(){
	    return   $this->belongsTo('App\User');

}
}
