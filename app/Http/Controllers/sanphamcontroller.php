<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SanphamModel;

class sanphamcontroller extends Controller
{
    function view_all(){
    	$array = SanphamModel::get_all();
    	return view('san_pham.view_all_sanpham',compact('array'));
    }
    static function view_insert(){
    	return view('san_pham.view_insert_san_pham');
    }
    function process_insert_san_pham(Request $rq){
    	$san_pham = new SanphamModel();
    	$san_pham -> ten =$rq ->get('ten');
    	$san_pham -> anh =$rq ->get('anh');
    	$san_pham ->insert();
    	return redirect()->route('view_all_sanpham');
    }
    static function view_update($ma){
        $each = SanphamModel::get_one($ma);
        return view('san_pham.view_update_san_pham',compact('each'));
    }
    function process_update($ma, Request $rq){
        $san_pham = new SanphamModel();
        $san_pham-> ma = $ma;
        $san_pham -> ten =$rq ->get('ten');
        $san_pham -> anh =$rq ->get('anh');
        $san_pham -> update();
        return redirect()->route('view_all_san_pham');

    }
}