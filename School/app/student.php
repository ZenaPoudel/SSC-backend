<?php

namespace App;
use App\Attendance;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{

	public function attendance(){
		return $this->hasMany('Attendance');
	}
    //
}
