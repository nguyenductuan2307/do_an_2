<?php

namespace App\Model;

use DB;

class SanphamModel
{
	public $ten;
	public $anh;
	public $nha_cung_cap;
	
	static function get_all(){
		$array = DB::select("select*from san_pham");
		return $array;
	}
	public function insert(){
		DB::insert("insert into san_pham(ten,anh) values(?,?)",[$this->ten,$this->anh]);
	}
	
}