<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
	public $timestamps=false;
      protected $fillable = [
        'class_id', 'section_id','student_id','sub_id','flag','date','time'
    ];
}