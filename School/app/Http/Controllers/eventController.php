<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;
use DB;

class eventController extends Controller
{
    //


    public function index(){

    	$event=event::all();
    	return array('event_list'=>$event);
    }

    public function connect(){
    	$response=array();
    	$response['flag']=false;
    	$response['msg']='';
    	//if db is connected

    	try{
    		DB::connection()->getPdo();
    		if(DB::connection()->getDatabaseName()){
    			$response['flag']=true;
    			$response['msg']='db connected to '.DB::connection()->getDatabaseName();
    		}   	
    	}
    	catch(\Exception $exception){

    	}
    	return $response;
    }
}
