<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\NhacungcapModel;

class nhacungcapcontroller extends Controller
{
    function view_all(){
    	$array = NhacungcapModel::get_all();
    	return view('nhacungcap.view_all',compact('array'));
    }

    function view_insert(){
    	return view('nhacungcap.view_insert_ncc');
    }

    function process_insert_ncc(Request $rq){
    	$nha_cung_cap = new NhacungcapModel();
    	$nha_cung_cap -> ten =$rq ->get('ten');
    	$nha_cung_cap ->insert();
    	return redirect()->route('view_all');
    }
    function delete($ma){
    	NhacungcapModel::delete($ma);
    	return redirect()->route('view_all');

    }
}
