<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\AdminModel;

class admincontroller extends Controller
{
    function view_all(){
    	$array = AdminModel::get_all();
    	return view('view_all_admin',compact('array'));
    }
}
