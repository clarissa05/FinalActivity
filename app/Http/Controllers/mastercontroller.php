<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mastercontroller extends Controller
{
   public function main(){
    	return view('main');
    }
    public function generic(){
    	return view('generic');
    }
      public function index(){
    	return view('index');
    }
      
}
