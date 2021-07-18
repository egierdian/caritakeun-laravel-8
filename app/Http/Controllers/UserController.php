<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'hellow';
    }
    public function ShowName(){	
    	// $data = "hehe";
    	// dd($data);
    	$a = 2;
        return view('index', ['name' => 'Egi Erdian']);
    }
}