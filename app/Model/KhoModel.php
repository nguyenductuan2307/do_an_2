<?php 

namespace App\Model;

use DB;

class KhoModel
{
	public $ma_san_pham;
	public $ngay;
	public $nhap;
	public $xuat;
	public function delete(){
		DB::delete('delete from kho where ma_san_pham = ? and ngay = ?',[
			$this->ma_san_pham,
			$this->ngay
		]);
	}
	public function insert(){
		DB::insert('insert into kho(ma_san_pham,ngay,nhap,xuat)
			values (?,?,?,?)',[
			$this->ma_san_pham,
			$this->ngay,
			$this->nhap,
			$this->xuat
		]);
	}
	static function get_so_luong_truoc_ngay($ngay){
		$array = DB::select("
			SELECT 
			san_pham.*,
			ngay,
			(select sum(nhap) - sum(xuat) from kho where ma_san_pham = san_pham.ma and ngay < '$ngay') as so_luong_con_lai_hom_qua,
			(select sum(nhap) - sum(xuat) from kho where ma_san_pham = san_pham.ma and ngay <= '$ngay') as so_luong_con_lai_hom_nay
			FROM `kho` 
			join san_pham on san_pham.ma = kho.ma_san_pham
			GROUP by san_pham.ma");
		return $array;
	}
	static function get_so_luong_hom_nay($ngay){
		$array = DB::select("
			SELECT 
			ma_san_pham,
			nhap,
			xuat
			FROM `kho`
			where ngay = '$ngay'
			GROUP by ma_san_pham
			");
		return $array;
	}

	 

}