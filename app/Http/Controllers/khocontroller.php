<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SanphamModel;
use App\Model\NgaythangModel;
use App\Model\KhoModel;

class khocontroller extends Controller
{
    public function view_chon_kho_with_ngay(){
        return view('kho.view_chon_kho_with_ngay');
    }
    public function view_update_so_luong_kho(Request $rq){
        $ngay = $rq->get('ngay');

        $array_san_pham = KhoModel::get_so_luong_truoc_ngay($ngay);

        $array_so_luong_hom_nay = KhoModel::get_so_luong_hom_nay($ngay);


        $array_nhap = [];
        $array_xuat = [];
        foreach ($array_so_luong_hom_nay as $each) {
            $nhap = $each->nhap;
            $xuat = $each->xuat;
            $ma_san_pham = $each->ma_san_pham;

            $array_nhap[$ma_san_pham] = $nhap;
            $array_xuat[$ma_san_pham] = $xuat;
        }


        return view('kho.view_update_so_luong_kho',compact('ngay','array_san_pham','array_nhap','array_xuat'));
    }
    public function process_so_luong(Request $rq){
        $array_nhap        = $rq->get('array_nhap');
        $array_xuat        = $rq->get('array_xuat');
        $ngay     = $rq->get('ngay');
        
        foreach ($array_nhap as $ma_san_pham => $so_luong_nhap) {
            $kho = new KhoModel();
            $kho->ngay = $ngay;
            $kho->ma_san_pham = $ma_san_pham;
            $kho->nhap = $so_luong_nhap;
            $kho->xuat = $array_xuat[$ma_san_pham];
            $kho->delete();
            $kho->insert();
        }
        return redirect()->route('view_update_so_luong_kho',['ngay' => $ngay]);
    }

    public function view_xem_chi_tiet()  {
        return view('chi_tiet.view_xem_chi_tiet_theo_ngay');
    }

}