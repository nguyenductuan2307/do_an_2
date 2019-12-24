<?php

namespace App\Model;

use DB;

class NhacungcapModel
{
	public $ma;
	public $ten;
	static function get_all(){
			$array = DB::select("select*from nha_cung_cap");
			return $array;
	}

	public function insert(){
			DB::insert("insert into nha_cung_cap(ten_nha_cung_cap) values(?)",[$this->ten]);
	}

	static function delete($ma){
			DB::delete("delete from nha_cung_cap where ma= ? ",[$ma]);
	}
			
}