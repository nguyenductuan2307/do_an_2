<?php

namespace App\Model;

use DB;

class AdminModel
{
	static function get_all(){
		$array = DB::select("select*from admin");
			return $array;
	}
}