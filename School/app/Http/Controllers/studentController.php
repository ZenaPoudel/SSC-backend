<?php

namespace App\Http\Controllers;
use App\Student;

use Illuminate\Http\Request;

class studentController extends Controller
{

	public function test(){
        $student=Student::findOrFail(1);
         dd($student->attendance);
        // $response=array();

        //  foreach($att as $a){
        //      echo $a;
        //  }
    
        
    //echo json_encode(array('response'=>$response));
        
    }
    //
}
