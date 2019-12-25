<?php

namespace App\Model;

use DB;

class AdminModel
{
	public $ten;
	public $ngay_sinh;
	public $gioi_tinh;
	public $email;
	public $mat_khau;
	static function get_all(){
		$array = DB::select("select*from admin");
			return $array;
	}
	public function insert(){
			DB::insert("insert into admin(ten,ngay_sinh,gioi_tinh,email,mat_khau) values(?,?,?,?,?)",
			[$this->ten,$this->ngay_sinh,$this->gioi_tinh,$this->email,$this->mat_khau,]);
	}
	static function delete($ma){
			DB::delete("delete from admin where ma= ? ",[$ma]);
	}
	static  function get_one($ma){
			$array = DB::select("select*from admin where ma = ?",[$ma]);
			return $array[0];
	}
	public function update(){
			DB::update(" update admin set ten=?, ngay_sinh=?, gioi_tinh=?,email=?,mat_khau=? where ma=?  ",
			[$this->ten,$this->ngay_sinh,$this->gioi_tinh,$this->email,$this->mat_khau,$this->ma]);
	}
}