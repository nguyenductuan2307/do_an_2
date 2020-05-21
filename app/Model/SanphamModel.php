<?php

namespace App\Model;

use DB;

class SanphamModel
{
	public $ten;
	public $anh;
	
	static function get_all(){
		$array = DB::select("select*from san_pham");
		return $array;
	}
	public function insert(){
		DB::insert("insert into san_pham(ten,anh) values(?,?)",[$this->ten,$this->anh]);
	}
	static  function get_one($ma){
			$array = DB::select("select*from san_pham where ma = ?",[$ma]);
			return $array[0];
	}
	public function update(){
			DB::update(" update san_pham set ten=?, anh=? where ma=?  ",
			[$this->ten,$this->anh]);
	}
	static function get_moi_nhat(){
		$array = DB::select("select max(ma) as ma_lon_nhat from san_pham");
		return $array[0]->ma_lon_nhat;
	}

	static function delete($ma){
			DB::delete("delete from san_pham where ma= ? ",[$ma]); }
}