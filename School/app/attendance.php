<?php

namespace App;
use App\Student;
use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
	public $timestamps=false;
      protected $fillable = [
        'id','class_id', 'section_id','student_id','sub_id','flag','date','time'
    ];

    public function student(){
    	return $this->belongsTo('Student');
    }
}
