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
    function view_insert(){
    	return view('view_insert_admin');
    }
    function process_insert_admin(Request $rq){
    	$admin = new AdminModel();
    	$admin -> ten =$rq ->get('ten');
    	$admin -> ngay_sinh =$rq ->get('ngay_sinh');
    	$admin -> gioi_tinh =$rq ->get('gioi_tinh');
    	$admin -> email =$rq ->get('email');
    	$admin -> mat_khau =$rq ->get('mat_khau');
    	$admin ->insert();
    	return redirect()->route('view_all_admin');
    }
    function delete($ma){
        AdminModel::delete($ma);
        return redirect()->route('view_all_admin');
    }
    function view_update_admin($ma){
        $each = AdminModel::get_one($ma);
        return view('view_update_admin',compact('each'));
    }
    function process_update_admin($ma, Request $rq){
        $admin = new AdminModel();
        $admin->ma = $ma;
        $admin -> ten =$rq ->get('ten');
        $admin -> ngay_sinh =$rq ->get('ngay_sinh');
        $admin -> gioi_tinh =$rq ->get('gioi_tinh');
        $admin -> email =$rq ->get('email');
        $admin -> mat_khau =$rq ->get('mat_khau');
        $admin -> update();
        return redirect()->route('view_all_admin');

    }
}
