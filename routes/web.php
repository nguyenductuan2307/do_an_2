<?php

Route::group(['middleware' => 'CheckLogin'],function(){

			Route::get('', 'logincontroller@menu')->name('view_menu');	
					Route::get('layer','layercontroller@layer')->name('layer.master');
			


					// Admin////////////////////////////////////////////////////////////////////
					Route::get('admin','admincontroller@view_all')->name('view_all_admin');
					Route::get('admin/view_insert', 'admincontroller@view_insert')->name('view_insert_admin');
					Route::post('admin/process_insert_admin', 'admincontroller@process_insert_admin')->name('process_insert_admin');
					Route::get('admin/delete/{ma}', 'admincontroller@delete')->name('delete_admin');
					Route::get('admin/view_update/{ma}', 'admincontroller@view_update_admin')->name('view_update_admin');
					Route::post('admin/process_update/{ma}', 'admincontroller@process_update_admin')->name('process_update_admin');
					//Admin///////////////////////////////////////////////////////////////////////
					//// Sản phẩm ////////////////////////////////////////////////////////////////
					Route::get('sanpham','sanphamcontroller@view_all')->name('view_all_sanpham');
					Route::get('sanpham/view_insert', 'sanphamcontroller@view_insert')->name('view_insert_san_pham');
					route::post('sanpham/process_insert_san_pham','sanphamcontroller@process_insert_san_pham')->name('process_insert_san_pham');
					Route::get('sanpham/view_update/{ma}','sanphamcontroller@view_update')->name('view_update_san_pham');
					Route::post('sanpham/process_update/{ma}','sanphamcontroller@process_update')->name('process_update_san_pham');
					/////////////////////////////////////////////////////////////////////////////////
					//chọn ngày để tồn kho
					Route::get('view_chon_kho_with_ngay','khocontroller@view_chon_kho_with_ngay')->name('view_chon_kho_with_ngay');
					Route::get('view_update_so_luong_kho','khocontroller@view_update_so_luong_kho')->name('view_update_so_luong_kho');
					Route::get('process_so_luong','khocontroller@process_so_luong')->name('process_so_luong'); 

					Route::get('chon_ngay_in__bao_cao','inbaocaocontroller@chon_ngay_in__bao_cao')->name('chon_ngay_in__bao_cao');
					Route::get('view_in_bao_cao','inbaocaocontroller@view_in_bao_cao')->name('view_in_bao_cao');



});

 




 
route::get('login','logincontroller@login')->name('view_login');
Route::post('process_login','logincontroller@process_login')->name('process_login');
route::get('logout','logincontroller@logout')->name('logout');


